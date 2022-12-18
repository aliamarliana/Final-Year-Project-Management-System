<?php

namespace App\Http\Controllers;

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
            return view('editproject', compact("proj"));
        }

        public function updateproj(Request $req){
            $project = Project::find($req->id);
            $project->start_date = $req->start_date;
            $project->end_date=$req->end_date;
            $project->duration=$req->duration;
            $project->progress=$req->progress;
            $project->status=$req->status;
            $project->save();
            return redirect('list-of-supervisee');
        }

}
