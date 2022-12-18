<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  @include("admin.navbar")
  
  <div style="position:relative; top:-750px; right:-300px">
  <h1>Welcome to Final Year Project Management System</h1><br><br>
  <h4 align="justify">
                                This system was developed to help supervisors update their supervisees' progress and to help coordinators keep track of the overall students' progress.
</h4>
  </div>
  </body>

  @include("admin.adminscript")
</html>