<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    protected $activity;

    public function __construct()
    {
        $this->activity = new Activity();
    }

    public function index()
    {
        return view('action-form');
    }

    public function update($id){
        $responce['activity'] = $this->activity->find($id);
        return view('action-form')->with($responce);

    }
}
