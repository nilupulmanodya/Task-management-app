<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Activity;
use App\Models\Goal;
use App\Models\Objective;
use App\Models\Strategy;
use App\Models\SetGoal;
use App\Models\SubAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use DB;
use File;


class GoalController extends Controller
{
    protected $setGoal;

    public function __construct()
    {
        $this->setGoal = new SetGoal();


    }
    public function index()
    {
        return view('add_goals');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        for ($i=1; $i <= $data['itr'] ; $i++) {
           $input['goal_id'] = $data['goalName-'.$i];
           $input['objective_id'] = $data['GoalObjective-'.$i];
           $input['strategy_id'] = $data['objectiveStrategy-' . $i];
           $input['action_id'] = $data['StrategyAction-'.$i];
           $input['sub_action_id'] = $data['actionSubAction-'.$i];
           $input['activity_id'] = $data['activity_id'];
           $result = $this->setGoal->create($input);
        }
        return view('funding_tables')->with('activity_id', $data['activity_id']);

    }
}
