<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
class homeControl extends Controller
{
    public function index(){
        return view('home');
    }

    public function redirectFunct(){
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1'){
            return view('admin.adminpage');
        }
        else{
            return view('home');
        }
    }
        public function show(){
        $name= Auth::user()->name;
        $project = Project::where('supervisor_name', $name)->get();
        return view('superviseelist',compact('project','name'));
    }

        public function editproj($id){
            $proj = Project::find($id);
            return view('editsupervisee', compact("proj"));
        }

        public function updateproj(Request $req){
            $project = Project::find($req->id);
            $toDate = Carbon::parse($req->start_date);
            $fromDate = Carbon::parse($req->end_date);
            $months = $toDate->diffInMonths($fromDate);
            $project->category = $req->category;
            $project->title = $req->title;
            $project->start_date = $req->start_date;
            $project->end_date=$req->end_date;
            $project->duration=$months;
            $project->progress=$req->progress;
            $project->status=$req->status;
            $project->save();
            return redirect('list-of-supervisee');
        }

}
