<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use App\Models\Project;
use Illuminate\Http\Request;

class adminControl extends Controller
{
    //
    public function list(){
        $data=Project::paginate(7);
        return view("admin.projectlist",compact("data"));
    }

    public function add(){
        $data=User::all();
        $stud=Student::all();
        $proj=Project::all();
        return view("admin.addproject",compact("data","stud","proj"));
    }

    public function store(Request $req){
        $project = new Project;
        $project->category = $req->category;
        $project->title=$req->title;
        $project->start_date = "N/A";
        $project->end_date="N/A";
        $project->duration="N/A";
        $project->progress = "N/A";
        $project->status="N/A";
        $project->student_name = $req->student_name;
        $project->supervisor_name=$req->supervisor_name;
        $project->examiner1_name=$req->examiner1_name;
        $project->examiner2_name=$req->examiner2_name;
        $project->save();
        return redirect('list-of-project');
    }

    public function delete($id){
        $value = Project::find($id);
        $value->delete();
        return redirect('list-of-project');
    }

    public function edit($id){
        $proj = Project::find($id);
        $user=User::all();
        $stud=Student::all();
        return view('admin.editproject', compact("proj","user","stud"));
    }


    public function update(Request $req){
        $project = Project::find($req->id);
        $project->category = $req->category;
        $project->title=$req->title;
        $project->student_name = $req->student_name;
        $project->supervisor_name=$req->supervisor_name;
        $project->examiner1_name=$req->examiner1_name;
        $project->examiner2_name=$req->examiner2_name;
        $project->save();
        return redirect('list-of-project');
    }

}
