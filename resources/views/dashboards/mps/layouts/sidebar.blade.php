<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #f8fafc;">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fa fa-university" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          Dashboard
        </a>
      </li><hr>  
      <li class="nav-item">
        <a href="{{ route('events.index') }}" class="nav-link">
          <i class="fa fa-server" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          Event
        </a>
      </li><hr>
      {{-- <li class="nav-item">
        <a href="" class="nav-link" >
          <i class="fa fa-address-card" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          Profile
        </a>
      </li><hr> --}}
      <li class="nav-item">
        <a href="{{ route('reports.index') }}" class="nav-link" >
          <i class="fa fa-file " style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          Report
        </a>
      </li><hr>  
    </ul>
  </div>
</nav>