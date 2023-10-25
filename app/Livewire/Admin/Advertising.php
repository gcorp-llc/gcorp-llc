<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Livewire\Forms\PostForm;

class Advertising extends Component
{
    public PostForm $form;
    public $states, $state, $cites, $city, $pleatformes,
           $platform, $categories, $category,
           $name, $number, $experrience,$website;

    public function mount()
    {
        $this->states = [
            "اصفهان",
            "البرز",
            "بوشهر",
            "تهران",
            "فارس",
            "خراسان‌جنوبی",
            "خراسان‌رضوی",
            "خراسان‌شمالی",
            "خوزستان",
            "مازندران",
            "هرمزگان",
            "همدان",
            "یزد",
            "کرمان",
            "كرمانشاه"
        ];
        $this->pleatformes = [
            "دیوار",
            "شیپور",
            "nobat.ir",
            "paziresh24",
            "doctoreto",
        ];
        $this->categories = [
            "پزشکی",
            "زیبایی"
        ];
    }

    public function updated()
    {
        if ($this->state == "اصفهان") {
            $this->cites = [
                "اصفهان",
                "خمینی شهر",
                "خوانسار",
                "خور و بیابانک",
                "شاهین شهرومیمه",
                "فلاورجان",
                "کاشان",
                "گلپایگان",
                "مبارکه",
                "نایین",
                "نجف آباد",
                "نطنز"
            ];
        };

        if ($this->state == "البرز") {
            $this->cites = [
                "فردیس",
                "کرج",
                "نظرآباد"
            ];
        };

        if ($this->state == "بوشهر") {
            $this->cites = [
                "بوشهر",
                "تنگستان",
                "جم",
                "دشتستان",
                "دشتی",
                "دیر",
                "دیلم",
                "عسلویه",
                "كنگان",
                "گناوه"
            ];
        };

        if ($this->state == "تهران") {
            $this->cites = [
                "اسلامشهر",
                "بهارستان",
                "پاكدشت",
                "پردیس",
                "پیشوا",
                "تهران",
                "دماوند",
                "شمیرانات",
                "شهریار",
                "قرچک",
                "ملارد",
                "ورامین"
            ];
        };

        if ($this->state == "فارس") {
            $this->cites = [
                "جهرم",
                "شیراز",
                "لارستان",
                "لامرد",
                "مرودشت"
            ];
        };

        if ($this->state == "خراسان‌جنوبی") {
            $this->cites = [
                "بیرجند",
                "سرایان",
                "سربیشه",
                "طبس",
                "فردوس",
                "قائنات",
                "نهبندان"
            ];
        };

        if ($this->state == "خراسان‌رضوی") {
            $this->cites = [
                "بینالود",
                "تربت جام",
                "تربت حیدریه",
                "سبزوار",
                "سرخس",
                "فیروزه",
                "قوچان",
                "كاشمر",
                "مشهد",
            ];
        };

        if ($this->state == "خراسان‌شمالی") {
            $this->cites = [
                "اسفراین",
                "بجنورد",
                "جاجرم",
                "راز و جرگلان",
                "شیروان",
                "فاروج",
                "گرمه",
                "مانه وسملقان"
            ];
        };

        if ($this->state == "خوزستان") {
            $this->cites = [
                "امیدیه",
                "اندیکا",
                "اندیمشک",
                "اهواز",
                "ایذه",
                "آبادان",
                "آغاجاری",
                "باغ ملک",
                "بندرماهشهر",
                "بهبهان",
                "حمیدیه",
                "خرمشهر",
                "دزفول",
                "رامشیر",
                "رامهرمز",
                "شادگان",
                "شوش",
                "شوشتر",
                "کارون",
                "گتوند",
                "لالی",
                "مسجدسلیمان",
                "هفتگل",
                "هندیجان",
                "هویزه"
            ];
        };

        if ($this->state == "مازندران") {
            $this->cites = [
                "آمل",
                "بابل",
                "بابلسر",
                "بهشهر",
                "تنكابن",
                "چالوس",
                "رامسر",
                "سارئ",
                "سوادكوه",
                "فریدونكنار",
                "قائم شهر",
                "کلاردشت",
                "نوشهر"
            ];
        };

        if ($this->state == "هرمزگان") {
            $this->cites = [
                "ابوموسی",
                "بستك",
                "بندرعباس",
                "بندرلنگه",
                "پارسیان",
                "جاسك",
                "خمیر",
                "رودان",
                "سیریك",
                "قشم",
                "میناب",
            ];
        };

        if ($this->state == "همدان") {
            $this->cites = [
                "بهار",
                "تویسركان",
                "فامنین",
                "ملایر",
                "نهاوند",
                "همدان"
            ];
        };

        if ($this->state == "یزد") {
            $this->cites = [
                "ابركوه",
                "اردكان",
                "بافق",
                "بهاباد",
                "تفت",
                "خاتم",
                "مهریز",
                "میبد"
            ];
        };

        if ($this->state == "کرمان") {
            $this->cites = [
                "بافت",
                "بردسیر",
                "بم",
                "جیرفت",
                "رابر",
                "رفسنجان",
                "زرند",
                "سیرجان",
                "شهربابك",
                "عنبرآباد",
                "فاریاب",
                "كرمان",
                "كهنوج",
                "منوجان",
            ];
        };

        if ($this->state == "كرمانشاه") {
            $this->cites = [
                2 => "پاوه",
                10 => "قصرشیرین",
                11 => "کرمانشاه",
                12 => "کنگاور",
                14 => "هرسین"
            ];

        };
    }

    public function addAdvertising()
    {
\App\Models\Advertising::create([
    "state"=>$this->state,
    "city"=>$this->city,
    "platform"=>$this->platform,
    "category"=>$this->category,
    "name"=>$this->name,
    "number"=>$this->number,
    "experience"=>$this->experrience,
    "website"=>$this->website
]);
        $this->reset("city","platform", "category",
        "name","number","experrience","website");
    }

    public function render()
    {
        return view('livewire.admin.advertising');
    }
}
