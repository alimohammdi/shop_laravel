<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Activecode;
use App\Models\User;
use Illuminate\Http\Request;

class AuthTokenController extends Controller
{
    public function indexPage(Request $request){
        $request->session()->reflash();
        if(!$request->session()->has('auth')){
            return redirect()->route('profile.home');
        }
        return view('auth.token');
    }

    public function postToken(Request $request){
        $request->validate([
           'token' => 'required'
        ]);
        if(! $request->session()->has('auth')){
            return redirect()->route('login');
        }

        $token = $request->token;
        $user =  User::FindOrFail($request->session()->get('auth.user_id'));
        $status = Activecode::VerifyCode($token,$user);

        if(! $status){
            $request->session()->flash('error-verify','کد تایید مطابق نیست لطفا دوباره تلاش کنید');
            $user->activecode()->delete();
            return redirect()->route('login');
        }

        if(auth()->loginUsingId($user->id,$request->session()->get('auth.remember'))){
            $request->session()->flash('success-verify','به پروفایل کاربری خود در تاپ کالا خوش امدید ');
            $user->activecode()->delete();
            return redirect()->route('profile.home');
        }

        $user->activecode()->delete();
        $request->session()->flash('error-verify','مشکلی رخ داده لطفا دوباره تلاش کنید');
        return redirect()->route('login');

    }
}
