<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Add extends Component
{
    public $name, $email, $gender, $mobile, $parent_house;
    public function add()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users|unique:spouses',
            'gender' => 'required',
            'mobile' => 'required',
            'parent_house' => 'required',
        ]);

        auth()->user()->spouse()->create([
            'name' => $this->name,
            'email' => $this->email,
            'gender' => $this->gender,
            'mobile' => $this->mobile,
            'parent_house' => $this->parent_house,
        ]);

        dd('added');
    }
    public function render()
    {
        return view('livewire.add');
    }
}
