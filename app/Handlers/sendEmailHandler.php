<?php

namespace App\Handlers;
use Mail;

class sendEmailHandler
{

    public function send($name,$email,$message)
    {


        // Mail::send()的返回值为空，所以可以其他方法进行判断
        Mail::send('email',['name' => $name , 'content' => $message , 'email' => $email],function($message) use ($email){
            $to = $email; //邮件地址
            $message ->to($to)->subject('留言提醒'); //邮件名
        });


    }



}