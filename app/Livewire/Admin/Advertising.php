<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Notifications\SmsNotification;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class Advertising extends Component
{
    public PostForm $form;
    public $states, $state, $cites, $city, $pleatformes,
        $platform, $categories, $category,
        $name, $number, $message;
    public $ads_messages, $ads_message,$ads_id,$ads,$ads_count;

    public function mount()
    {
        $this->ads_messages = \App\Models\Advertising::get();
        $this->states = [
            "همه",
            "اصفهان",
            "تبریز",
            "کرج",
            "بوشهر",
            "تهران",
            "شیراز",
            "مشهد",
            "کاشان",
            "آبادان",
            "اهواز",
            "آمل",
            "هرمزگان",
            "همدان",
            "یزد",
            "کرمان",
            "كرمانشاه",
            "بندرعباس",
            "بندرلنگه",
        ];
    }

    public function updated()
    {
        $this->ads=\App\Models\Advertising::find($this->ads_id);
        $users=User::whereNotNull('phone')
            ->where('data->state',$this->state)->get();
      $this->ads_count=count($users);
    }

    public function addAdvertising()
    {
        \App\Models\Advertising::create([
            "message" => $this->message
        ]);
        $this->reset( "message");
        return redirect('/admin/advertisings');
    }

    public function stopQueue()
    {
        Artisan::call('queue:clear');
    }

    public function testMessage()
    {
            $user = \App\Models\User::firstWhere('phone', '09370290168');
            $data = [
                'message' => $this->ads->message,
            ];
            Notification::sendNow($user, new SmsNotification($data));
        $this->reset("ads_message");
    }

    public function sendMessages()
    {

        $users=User::whereNotNull('phone')
            ->where('data->state',$this->state)->get();

        $users->map(function ($item) {
            $user = User::find($item->id);
            $data=[
                'message' =>$this->ads->message,
            ];
            Notification::sendNow($user,new \App\Notifications\SmsNotification($data));
        });
        $this->ads->update([
            "send"=>true
        ]);
        return redirect('/admin/advertisings');
    }

    public function render()
    {
        return view('livewire.admin.advertising');
    }
}
