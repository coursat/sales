<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">

      <div class="title">
        <h1 class="h5">Mohammed Hamdy</h1>
        {{-- <p>Manager</p> --}}
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
    <li class="active"><a href="{{url('')}}"> <i class="icon-home"></i>Home </a></li>
    <li><a href="{{url('students')}}"> <i class="icon-grid"></i>Students </a></li>
      <li><a href="{{url('cycles')}}"> <i class="icon-padnote"></i>Cycles </a></li>
      <li><a href="#exampledropdownDropdown" aria-expanded="true" data-toggle="collapse"> <i class="icon-windows"></i>Assets</a>
        <ul id="exampledropdownDropdown" class=" list-unstyled show ">
          <li><a href="{{url('courses')}}">Course</a></li>
          <li><a href="{{url('branches')}}">Branchs</a></li>
          <li><a href="{{url('payments')}}">Payment Methods</a></li>
          <li><a href="{{url('status')}}">Student Status</a></li>
          <li><a href="{{url('careers')}}">Student Faculties</a></li>
          <li><a href="{{url('salesman')}}">Sales Man</a></li>
          <li><a href="{{url('jobs')}}">jobs</a></li>
        </ul>
      </li>

      <li><a href="{{url('reports')}}"> <i class="fa fa-bar-chart"></i>Reports </a></li>

    {{-- </ul><span class="heading">Extras</span>
    <ul class="list-unstyled">
      <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
    </ul> --}}
  </nav>
