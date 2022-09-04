<?php

namespace App\Http\Controllers\Auth;

trait TowfactorType
{
    public function logged($request, $user)
    {
        if ($user->tow_factor_type !== 'not_active') {
            auth()->logout();
            $request->session()->flash('auth', [
                'user_id' => $user->id,
                'using_sms' => false,
                'remember' => $request->has('remember')
            ]);
            if ($user->tow_factor_type === 'active') {
                $code = \App\Models\Activecode::generateCode($user);
//            TODO send sms
                $request->session()->push('auth.using_sms', true);
            }
            return redirect()->route('send-token-code');
        }
        return false;
    }
}
