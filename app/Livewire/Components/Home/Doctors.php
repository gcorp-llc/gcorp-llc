<?php

namespace App\Livewire\Components\Home;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Doctors extends Component
{
    use WithPagination;

    public $query = '', $states, $state, $expertises, $experience;

    public function mount()
    {
        $this->states = [
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
        $this->expertises = [
            " زنان و زایمان",
            "مغز و اعصاب",
            "گوش حلق و بینی",
            "ارتوپدی",
            "کلیه و مجاری ادراری",
            "پوست و مو",
            "چشم پزشکی",
            "گوارش ، کبد و آندوسکوپی",
            "قلب و عروق",
            "رادیولوژی و سونوگرافی",
            "غدد، رشد و متابولیسم",
            "روانپزشکی و روان‌شناسی",
            "کودکان و نوزادان ( اطفال )",
            "جراحی عمومی",
            "دندان پزشکی",
            "ریه و دستگاه تنفسی",
            "داخلی",
            "جراحی پلاستیک و زیبایی",
            "خون و سرطان",
            "تغذیه",
            "مامایی",
            "عفونی",
            "عمومی",
            "طب فیزیکی و توان بخشی",
            "فیزیوتراپی",
            "کایروپراکتیک",
            "آسیب شناسی(پاتولوژی)",
            "بیهوشی و درد",
            "آزمایشگاه ها",
            "انکولوژیست (پرتو درمانی و ..)",
            "ژنتیک و پزشکی هسته ای",
            "سم شناسی بالینی و مسمومیتها",
            "طب کار و بیماری های شغلی",
            "آسم ، آلرژی و ایمونولوژی بالینی",
            "پزشکی قانونی و مسمومیت ها",
            "طب سنتی ایرانی",
            "طب اورژانس",
            "بینایی سنجی (اپتومتری)",
            "شنوایی سنجی (ادیولوژی)",
            "پزشکی ورزشی و طب ورزشی",
            "روماتولوژی",
            "گفتار درمانی و کار درمانی",
            "متخصص و جراح دهان ، فک و صورت",
            "ارتوپدی فنی"
        ];
    }

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {

        return view('livewire.components.home.doctors')->with([
            'doctors' => User::where('role_id', 2)
                ->where('data->state', 'like', '%' . $this->state . '%')
                ->where('data->experience', 'like', '%' . $this->experience . '%')
                ->where('name', 'like', '%' . $this->query . '%')->inRandomOrder()->latest()->paginate(30),
        ]);
    }
}
