<?php

namespace App\Helper;
use Melipayamak;
class SendSms
{

    public static function normal($to, $text, $from = '50004001290168'): void
    {
        try{
            $sms = Melipayamak::sms();
            $response = $sms->send($to,$from,$text);
            $json = json_decode($response);
            echo $json->Value; //RecId or Error Number
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
