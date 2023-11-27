<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index($activity_id)
    {
        return view('funding_tables')->with(['activity_id' =>$activity_id]);
    }
}
