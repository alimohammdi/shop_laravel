<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    use TowfactorType;
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request){
      try{
          $googleUser = Socialite::driver('google')->user();
          $user = User::where('email','=',$googleUser->email)->first();

          if(! $user) {
              $user = User::create([
                  'name' => $googleUser->name,
                  'email' => $googleUser->email,
                  'tow_factor_type' => 'not_active',
                  'password' => md5(time())
              ]);
          }
              auth()->loginUsingId($user->id);
//          TODO Sweet Alert
          return $this->logged($request,$user) ? : redirect(route('login'));
      }catch (\Exception $e){
          return abort(404) ;
      }
    }
}
