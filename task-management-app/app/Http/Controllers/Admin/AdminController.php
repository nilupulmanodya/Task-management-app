<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }


    public function addUsers(Request $request)
    {
        return view('admin/add-users');
    }

    public function storeUsers(Request $request)
    {
        dd($request);
    }
}
