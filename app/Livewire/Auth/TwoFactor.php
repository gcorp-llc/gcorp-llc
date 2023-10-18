<?php

namespace App\Livewire\Auth;

use App\Helper\SendSms;
use App\Models\Sms;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class TwoFactor extends Component
{
    public $phone, $user, $code, $sms;

    public function mount($phone = null)
    {
        $randomNumber = random_int(100000, 999999);
        $randomCode = str_pad($randomNumber, 6, '0', STR_PAD_LEFT);
        $this->user = User::firstWhere('phone', $phone);

        $this->sms = Sms::firstWhere([
            'user_id' => $this->user->id,
            'phone' => $phone,
            'type' => 'auth'
        ]);

        if (empty($this->sms)) {
            $this->sms=    Sms::create([
                'user_id' => $this->user->id,
                'phone' => $phone,
                'type' => 'auth',
                'message' => $randomCode
            ]);

        $message="سلام  ".$this->user->name .' گرامی کد تایید شما به حساب code : '. $randomCode;
        SendSms::normal($this->phone,$message);
        } elseif ($this->sms->created_at <= Carbon::now()->addMinute(-2)) {
            Sms::where([
                'user_id' => $this->user->id,
                'phone' => $phone,
                'type' => 'auth'
            ])->delete();

            $this->sms = Sms::create([
                'user_id' => $this->user->id,
                'phone' => $phone,
                'type' => 'auth',
                'message' => $randomCode
            ]);

            $message="سلام  ".$this->user->name .' گرامی کد تایید شما به حساب code : '. $randomCode;
            SendSms::normal($this->phone,$message);
        }


    }

    public function signUp()
    {
        if ($this->code === $this->sms->message) {
            $this->user->update([
                'accepted' => true
            ]);
            Auth::login($this->user);
            return redirect()->route('user.profile');
        }

    }

    public function resetCode()
    {
        $randomNumber = random_int(100000, 999999);
        $randomCode = str_pad($randomNumber, 6, '0', STR_PAD_LEFT);
        Sms::where([
            'user_id' => $this->user->id,
            'phone' => $this->user->phone,
            'type' => 'auth'
        ])->delete();

        $this->sms = Sms::create([
            'user_id' => $this->user->id,
            'phone' => $this->user->phone,
            'type' => 'auth',
            'message' => $randomCode
        ]);

        $message="سلام  ".$this->user->name .' گرامی کد تایید شما به حساب code : '. $randomCode;
        SendSms::normal($this->phone,$message);
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.two-factor');
    }
}
