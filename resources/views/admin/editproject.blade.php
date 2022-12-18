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
    <h3>Edit Project Form</h3>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$proj['id']}}"><br/><br/>
    <label>Project Category:</label>&nbsp;&nbsp;
    <select name="category" required>
    @if($proj['category'] != "Development Project")
      <option value="{{$proj['category']}}">{{$proj['category']}}</option>
      <option value="Development Project">Development Project</option>
    @else
    <option value="{{$proj['category']}}">{{$proj['category']}}</option>
      <option value="Research Project">Research Project</option>
    @endif
    </select><br><br>    


    <label>Project Title: </label>&nbsp;&nbsp;
    <input type="text" name="title" placeholder="Enter Project Title"  value="{{$proj['title']}}" required/><br><br>


    <label>Student Name: </label>&nbsp;&nbsp;
    <select name="student_name" required>
    <option value="{{$proj['student_name']}}">{{$proj['student_name']}}</option>
      @foreach($stud as $student)
      @if($proj['student_name']!= $student['student_name'])
      <option value="{{$student['student_name']}}">{{$student['student_name']}}</option>
      @endif
      @endforeach
    </select><br><br>  



    <label>Supervisor Name: </label>&nbsp;&nbsp;
    <select name="supervisor_name" required>
    <option value="{{$proj['supervisor_name']}}">{{$proj['supervisor_name']}}</option>
      @foreach($user as $user1)
      @if(($user1->usertype=="0") and (($proj['supervisor_name'] != $user1['name'])))
      <option value="{{$user1['name']}}">{{$user1['name']}}</option>
      @endif
      @endforeach
    </select><br><br>

    <label>Examiner 1 Name: </label>&nbsp;&nbsp;
    <select name="examiner1_name" required>
    <option value="{{$proj['examiner1_name']}}">{{$proj['examiner1_name']}}</option>
    @foreach($user as $user1)
      @if(($user1->usertype=="0") and (($proj['examiner1_name'] != $user1['name'])))
      <option value="{{$user1['name']}}">{{$user1['name']}}</option>
      @endif
      @endforeach
    </select><br><br>

    <label>Examiner 2 Name: </label>&nbsp;&nbsp;
    <select name="examiner2_name" required>
    <option value="{{$proj['examiner2_name']}}">{{$proj['examiner2_name']}}</option>
    @foreach($user as $user1)
      @if(($user1->usertype=="0") and (($proj['examiner2_name'] != $user1['name'])))
      <option value="{{$user1['name']}}">{{$user1['name']}}</option>
      @endif
      @endforeach
    </select><br><br>


    <button type="submit" class="submit-btn">Update Project</button>
    </form>

    <br><br><br><br><br>
    </div>
  </div>
  @include("admin.adminscript")
  </body>
</html>