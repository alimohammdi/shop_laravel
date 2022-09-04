<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activecode extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'code',
        'expired_at',
    ];
     public $timestamps = false ;

     public function scopegenerateCode($query,$user){
       if($code = $this->getAliveCodeForUser($user)){
           $code = $code->code;
       }else{
           do{
               $code = mt_rand(100000,999999);
           }while($this->checkCodeUnique($user,$code));

           $user->activecode()->create([
              'code'=> $code,
              'expired_at'=> now()->addMinute(10)
           ]);
       }
     }

    private function checkCodeUnique($user, int $code)
    {
        return !! $user->activecode()->where('code',$code)->first();
    }

    private function getAliveCodeForUser($user)
    {
        return $user->activecode()->where('expired_at','>',now())->first();
    }

    public function user(){
         return  $this->belongsTo(User::class);
     }


     public function scopeVerifyCode($query,$code,$user){
        return !! $user->activecode()->where('code',$code)->where('expired_at','>',now())->first();
     }
}
