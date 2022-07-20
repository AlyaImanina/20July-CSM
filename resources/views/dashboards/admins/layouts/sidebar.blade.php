<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #f8fafc;" >

  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="{{route('statistics.index')}}" class="nav-link">
          <i class="fa fa-university" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          Dashboard
        </a>
      </li><hr>
      {{-- <hr style="background-color: orangered ;height:2px">   --}}
      <li class="nav-item">
        <a href="{{ route('smeexcels.index') }}" class="nav-link" >
          <i class="fa fa-upload" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
       SME Preliminary Assessment & Scoring
        </a>
      </li><hr>  
      <li class="nav-item">
        <a href="{{ route('pgpksprogrammes.index') }}" class="nav-link " >
          <i class="fa fa-calendar-check-o" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          PGPKS Programme
        </a>
      </li><hr>
      <li class="nav-item">
        <a href="{{ route('registersmes.index') }}" class="nav-link" >
          <i class="fa fa-address-card" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          SME Information
        </a>
      </li><hr>
      <li class="nav-item">
        <a href="{{ route('registermps.index') }}"  class="nav-link" >
          <i class="fa fa-street-view" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          Auth Partner Information
        </a>
      </li><hr> 
      <li class="nav-item">
        <a href="{{ route('bookingdates.index') }}"  class="nav-link" >
          <i class="fa fa-calendar" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
          Upcoming Services
        </a>
      </li><hr> 
      <li class="nav-item">
        <a href="{{ route('reportadmins.index') }}" class="nav-link" >
          <i class="fa fa-file" style="font-size:20px;color:darkslategrey;"></i> &nbsp;
         Report
        </a><hr>
    </ul>
  </div>
</nav>