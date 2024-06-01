<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

class AdvertisingController extends Controller
{
    public function sendAdvertising($id)
    {
       $advertising=Advertising::find($id);
       $users=User::whereNotNull('phone')
           ->where('data->state',$advertising->state)->get();
       $users->map(function ($item) use ($advertising){
           $user = User::find($item->id);
           $data=[
               'message' => $advertising->message,
           ];
           Notification::send($user,new \App\Notifications\SmsNotification($data));
       });
        $advertising->update([
            "send"=>true
        ]);
        return back();

    }
}
