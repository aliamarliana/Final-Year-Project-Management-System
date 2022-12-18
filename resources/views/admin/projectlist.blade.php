<x-app-layout>

</x-app-layout>
@php
$i = 1
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")

  <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List of Projects</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> No. </th>
                            <th> Project Category </th>
                            <th> Project Title </th>
                            <th> Start Date </th>
                            <th> End Date </th>
                            <th> Duration </th>
                            <th> Progress </th>
                            <th> Status </th>
                            <th> Student Name </th>
                            <th> Supervisor Name </th>
                            <th> Examiner 1 Name </th>
                            <th> Examiner 2 Name </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $project)
                          <tr>
                            <td>{{$i++}}</td>
                            <td> {{$project['category']}} </td>
                            <td> {{$project['title']}} </td>
                            <td> {{$project['start_date']}} </td>
                            <td> {{$project['end_date']}} </td>
                            <td> {{$project['duration']}} </td>
                            <td> {{$project['progress']}} </td>
                            <td> {{$project['status']}} </td>
                            <td> {{$project['student_name']}} </td>
                            <td> {{$project['supervisor_name']}} </td>
                            <td> {{$project['examiner1_name']}} </td>
                            <td> {{$project['examiner2_name']}} </td>
                            <td><a href={{"/edit/".$project['id']}}><button class="button1">Edit</button></a>&nbsp;
                              <a href={{"/delete/".$project['id']}}><button class="button2">Delete</button></a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
  </div>

  <span>
    {{$data->links()}}
</span>
  @include("admin.adminscript")
  </body>
</html>

<style>

.button1 {
  background-color: orange; 
  color: white; 
  border: 2px solid orange;
  border-radius: 8px;
  padding: 8px;
}

.button1:hover {
  background-color: white;
  color: orange;
}


.button2 {
  background-color: red; 
  color: white; 
  border: 2px solid red;
  border-radius: 8px;
  padding: 8px;
}

.button2:hover {
  background-color: white;
  color: red;
}
</style>

