<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddUsers extends Component
{

    protected $user;
    public $nameInput;
    public $emailInput;
    public $user_type;
    public $passwordInput;
    public $passwordConfirmInput;


    public function __construct()
    {
        $this->user = new User();
    }

    protected $rules = [
        'nameInput' => 'required|min:6',
        'emailInput' => 'required|email',
        'user_type' => 'required',
        'passwordInput' => 'required|min:6|same:passwordConfirmInput',
        'passwordConfirmInput' => 'required',
    ];



    public function render()
    {
        return view('livewire.admin.add-users');
    }


    public function addUser()
    {
        // dd('hi');
        $validatedData = $this->validate();
        $data['name'] = $validatedData['nameInput'];
        $data['email'] = $validatedData['emailInput'];
        $data['user_type'] = $validatedData['user_type'];
        $data['password'] = Hash::make($validatedData['passwordInput']);
        $passwordConfirmation = $validatedData['passwordConfirmInput'];
        $this->user->create($data);
        $this->reset();
        return redirect()->back();
    }
}
