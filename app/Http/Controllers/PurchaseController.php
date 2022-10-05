<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Order;
use App\Models\Transaction;
use Shetabit\Payment\Facade\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;
use Psy\Readline\Hoa\FileDoesNotExistException;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Multipay\Invoice;
use Exceptions;
use SoapFault;
class PurchaseController extends Controller
{
    public function purchase($id){
        $user = Auth::user();
        $basket = Basket::where('id', $id)->first();
        $basketExist = Order::where('basket_id', $basket->id)->where('user_id',$user->id)->first();
        if($basketExist){
            return 'سبد مورد نظر پرداخت شده';
        }
        Try{
            $invoice =new Invoice();
            $invoice->amount($basket->price);
            $invoice->detail('شماره همراه',$user->phone);
            $paymentId = md5(uniqid('', true));
            $transaction = Transaction::create([
                'payment_id' => $paymentId,
                'basket_id' => $basket->id,
                'user_id' => $user->id,
                'paid' => $invoice->getAmount(),
                'invoice_details' => $invoice
            ]);

             $callbackUrl = route('payment.product.result',[$basket->id,'payment_id'=>$paymentId]);
            $payment = Payment::callbackUrl($callbackUrl);
            $payment->config('description',$user->name);

             $payment->purchase($invoice,function($driver,$transactionId) use ($transaction){
                $transaction->transaction_id = $transactionId;
                 $transaction->save();
            });
            return $payment->pay()->render();

        }catch( Exceptions|PurchaseFailedException|SoapFault $e){
            $transaction->transaction_result  = [
              $e->getMessage(),
              $e->getCode()
            ];
            $transaction->status =  Transaction::STATUS_FAILED;
            $transaction->save();
            return 'خطایی در پرداخت به وجود آمد';
        }
    }




    public function result(Request $request , $id){
        $basket = Basket::findorfail($id);

        if($request->missing('payment_id')){
            return 'خطایی در تراکنش رخ داده';
        }

        $transaction = Transaction::where('payment_id',$request->payment_id)->first();
        if(empty($transaction)){
            return 'خطا!! تراکنش درخواستی موجود نیست ';
        }

        if($transaction->user_id  !== Auth::id()){
            return 'خطا!! مشکلی در احراز هویت شما رخ داده ';
        }
        if($basket->id !== $transaction->basket_id){
            return 'خطا!! تراکنش برای این محصول یافت نشد  ';
        }
        if($transaction->status !== Transaction::STATUS_PENDING){
            return 'خطا!! مشکلی در پرداخت به وجود امد ';
        }

        try{
            $receipt = Payment::amount($transaction->paid)
                ->transactionId($transaction->transaction_id)
                ->verify();
            $transaction->transaction_result = $receipt;
            $transaction->status = Transaction::STATUS_SUCCESS;
            $transaction->save();
            $user = Auth::user();
            Order::create([
               'user_id' => $user->id,
               'basket_id' => $basket->id,
               'price' => $basket->price,
               'status'  => 'paid',
            ]);
            $basket->update([
               'isActive' => '0'
            ]);
            return "پرداخت با موفقیت انجام شد :)";
        }catch(Exception|FileDoesNotExistException $e){
            if($e->getCode()  < 0 ){
                $transaction->transaction_result  = [
                    $e->getMessage(),
                    $e->getCode()
                ];
                $transaction->status =  Transaction::STATUS_FAILED;
                $transaction->save();
            }
            return 'خطایی در پرداخت به وجود امد :(';
        }
    }
}
