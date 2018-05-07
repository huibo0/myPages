<?php

namespace App\Handlers;
use Mail;

class sendEmailHandler
{

    public function send($address,$subject)
    {

        $code = random_int(1000,9999);
        // Mail::send()的返回值为空，所以可以其他方法进行判断
        Mail::send('email',['name' => $code],function($message) use ($address,$subject){
            $to = $address; //邮件地址
            $message ->to($to)->subject($subject); //邮件名
        });

        //写入验证码表
        $res = VerificationCode::create(['code' =>  $code, 'account' => $address, 'type' => 1]);
        if ($res) {
            return showSuccess('发送成功','10000');
        }else {
            return showError('发送失败','20000');
        }

    }


    //验证验证码是否正确
    public function verification($code,$address)
    {
        $verification = VerificationCode::where('account',$address)->orderBy('id','desc')->first();
        if ($code == $verification->code) {
            return true;
        }else{
            return false;
        }
    }

}