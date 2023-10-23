<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;
use File;

class HomeController extends Controller
{
    protected $activity;

    public function __construct()
    {
        $this->activity = new Activity();
    }

    public function store(Request $request)
    {
        $rules = [
            'fileInput'=>'required|mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
            'titleInput' => 'required',
            'nameInput'=>'required',
            'introInput'=>'required',
            'startDate' => 'required',
            'endDate' => 'required',


        ];


        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $data = $request->all();

        if ($request->hasFile('fileInput')) {
            $file = $request->file('fileInput') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/Example_File' ;
            $file->move($destinationPath,$fileName);
            $input['file_path'] = $fileName;
        }
        $input['activity_title'] = $data['titleInput'];
        $input['responsible_person'] = $data['nameInput'];
        $input['introduction'] = $data['introInput'];
        $input['start_date'] = date('Y-m-d', strtotime($data['startDate']));
        $input['end_date'] = date('Y-m-d', strtotime($data['endDate']));
        $input['proposal_id'] = 0;
        $input['user_id'] = Auth::id();

        $result = $this->activity->create($input);

        return view('add_goals')->with('id', $result['id']);


    }
}
