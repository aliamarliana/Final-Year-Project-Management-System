      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <center><a href="/redirect" id="GFG"><h3><br>FYP Management System</h3></a></center>
        </div>
        <ul class="nav">

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/add-project')}}">
              <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Add New Project</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/list-of-project')}}">
              <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">List of Projects</span>
            </a>
          </li>
          
          <ul>
    </nav>

    <style>
        #GFG {
            text-decoration: none;
            color:white;
        }
    </style>
          <!-- content-wrapper ends -->
          