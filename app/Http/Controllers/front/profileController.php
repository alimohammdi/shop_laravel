<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\Activecode;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(){
        return view('front.profile.index');
    }

    public function towfactore(){
        return view('front.profile.towfactore');
    }
    public function towfactoreAuth(CreateUserRequest $request){

        if($request->status == 'active'){
            $phone_number = auth()->user()->phone_number;

            if($phone_number !== $request->phone){
                $code = Activecode::generateCode(auth()->user());
                $request->session()->flash('phone',$request->phone);

               return  redirect()->route('verify.index');
            }else{
                $request->user()->update([
                    'tow_factor_type' => 'active'
                ]);
                session()->flash('active-verify-phone-number', 'تایید دو مرحله ای با شماره موبایل برای شما فعال شد');
                return back() ;
            }
        }
       if($request->status == 'not_active'){
            $request->user()->update([
                'tow_factor_type' => $request->status
            ]);
           session()->flash('not_active-verify', 'تایید دو مرحله ای با شماره موبایل برای شما غیر فعال شد');

           return back() ;
        }

    }

    //verify code

    public function verifyPage(Request $request){
        $request->session()->reflash();
        return view('front.profile.verify-phone-number');
    }
    public function verifyPhoneNumber(Request $request){
    $request->validate([
       'token' => 'required'
    ]);
     $status = Activecode::verifyCode($request->token,$request->user());

    if($status){
     $request->user()->activecode()->delete();
     $request->user()->update([
        'tow_factor_type' => 'active',
         'phone_number' => $request->session()->get('phone')
     ]);
        session()->flash('active-verify-phone-number', 'تایید دو مرحله ای با شماره موبایل برای شما فعال شد');
        return redirect()->route('profile.towfactore');
    }else{
//         TODO sweet alert danger
        $request->session()->flash('error-verify','کد تایید مطابق نیست لطفا دوباره تلاش کنید');
        $request->user()->activecode()->delete();
        return redirect()->route('profile.towfactore');
    }
    }



}
