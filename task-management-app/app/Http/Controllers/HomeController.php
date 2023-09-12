<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $activity;

    public function __construct()
    {
        $this->activity = new Activity();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $input['activity_title'] = $data['titleInput'];
        $input['responsible_person'] = $data['nameInput'];
        $input['introduction'] = $data['introInput'];
        $input['start_date'] = date('Y-m-d', strtotime($data['startDate']));
        $input['end_date'] = date('Y-m-d', strtotime($data['endDate']));
        $input['proposal_id'] = 0;
        $input['user_id'] = Auth::id();

        $result = $this->activity->create($input);
        $response['activity_id'] = $result['id'];
        return view('add_goals')->with($response);

        
    }
}
