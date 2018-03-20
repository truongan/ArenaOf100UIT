<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Questions_answer;
use App\Contest;
use App\User;
use App\History;
use DB;

class admin_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkadmin');
    }
    public function index(){

    	$questions = Question::all();
        $questioncurrent = DB::table('contests')->where('active','=',true)->get();
    	return view('AdminContest',compact('questions'),compact('questioncurrent'));
    }

    public function change(){
    	//var_dump($request->id);
    	///Doi cau hoi hien tai trong table contest
    	///
        Contest::where('active', 1)->update(['currentquestion_id'=>DB::raw('currentquestion_id+1')]);//Cau Hoi Hien Tai++
    }

    public function check_answer(Request $request){//Chua Test
        $user= User::select('users.*')->where('id','=','$request->id')->get();
        $user->active=0;
        $user->save();
    }




    public function show_history(){//Chuc Nang Cua Admin ->Show Toan Bo Lich Su Thi Dau
        $MergeHistory = History::select('histories.*','users.username','questions.content as QT','questions_answers.*')  //Lay Duoc Cau Hoi Hien Tai Dua Tren Contest_CQ va Contest.Active
            ->join('users','user_id','=','users.id')
            ->join('questions','question_id','=','questions.id')
            ->join('questions_answers','questions_answer_id','=','questions_answers.id')
            ->groupBy('histories.id')
            ->get();
        return view('ShowHistory',compact('MergeHistory') );
    }
}
