<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  @include("admin.formcss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")

    <div style="position:relative; top:40px; right:-50px" class="my-form">
    <h3>Add New Project Form</h3><br>
    <form action="/store-project" method="post">
        @csrf
    <label>Project Category:</label>&nbsp;&nbsp;
    <select name="category" required>
    <option selected disabled value="">-- Please choose project category --</option>
      <option value="Development Project">Development Project</option>
      <option value="Research Project">Research Project</option>
    </select><br><br>    

    <label>Project Title: </label>&nbsp;&nbsp;
    <input type="text" name="title" placeholder="Enter Project Title" required/><br><br>

    <label>Student Name: </label>&nbsp;&nbsp;
    <select name="student_name" required>
    <option selected disabled value="">-- Please choose student name --</option>
      @foreach($stud as $student)
      <option value="{{$student['student_name']}}">{{$student['student_name']}}</option>
      @endforeach
    </select><br><br>  



    <label>Supervisor Name: </label>&nbsp;&nbsp;
    <select name="supervisor_name" required>
    <option selected value="Not assigned yet">-- Please choose supervisor name --</option>
      @foreach($data as $data1)
      @if($data1->usertype=="0")
      <option value="{{$data1['name']}}">{{$data1['name']}}</option>
      @endif
      @endforeach
    </select><br><br>

    <label>Examiner 1 Name: </label>&nbsp;&nbsp;
    <select name="examiner1_name" required>
    <option selected  value="Not assigned yet">-- Please choose examiner 1 name --</option>
      @foreach($data as $data1)
      @if($data1->usertype=="0")
      <option value="{{$data1['name']}}">{{$data1['name']}}</option>
      @endif
      @endforeach
    </select><br><br>

    <label>Examiner 2 Name: </label>&nbsp;&nbsp;
    <select name="examiner2_name" required>
    <option selected value="Not assigned yet">-- Please choose examiner 2 name --</option>
      @foreach($data as $data1)
      @if($data1->usertype=="0")
      <option value="{{$data1['name']}}">{{$data1['name']}}</option>
      @endif
      @endforeach
    </select><br><br>


    <button type="submit" class="submit-btn">Add Project</button>
    </form>

    <br><br><br><br><br>
    </div>
  </div>
  @include("admin.adminscript")
  </body>
</html>