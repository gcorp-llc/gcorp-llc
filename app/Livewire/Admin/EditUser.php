<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class EditUser extends Component
{
    public $doctor,$state,$numbers,$name,$address,$websites,$code,$experience,$instagram,$description;

    public function mount()
    {
        $this->state=$this->doctor->data->state??'تهران';
        $this->numbers=$this->doctor->data->numbers??[];
        $this->address=$this->doctor->data->address;
        $this->websites=$this->doctor->data->websites;
        $this->code=$this->doctor->data->code;
        $this->experience=$this->doctor->data->experience;
        $this->instagram=$this->doctor->data->instagram;
        $this->description=$this->doctor->data->description;
    }
    public function userUpdate()
    {

        $this->doctor->update([
            'data' => [
                "state" => $this->state,
                "city" => $this->state,
                'numbers' => $this->numbers,
                "platform" => 'https://nobat.ir',
                "category" => '',
                "address" => $this->address,
                'websites' => $this->websites??"",
                'code' => $this->code,
                "experience" => $this->experience,
                'instagram' => $this->instagram,
                'description' => $this->description,
            ]
        ]);
    }
    public function render()
    {
        return view('livewire.admin.edit-user');
    }
}
