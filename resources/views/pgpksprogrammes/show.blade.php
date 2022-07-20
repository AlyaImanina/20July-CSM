@extends('dashboards.admins.layouts.main')

@section('content')
    
{{-- 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4> Show Event Details</h4>
        </div>
    </div>
</div>

<table class="table table-striped">
    <tr>
        <th>Event</th>
        <td>{{ $pgpks_event->event }}</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>{{ $pgpks_event->date }}</td>
    </tr>
    <tr>
        <th>Time </th>
        <td>{{ $pgpks_event->time }}</td>
    </tr>
   
</table> --}}

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                    <h4 class="card-title text-center">Company Detail</h4><br>
                
<table class="table table-striped text-center">
    <tr>
        <th>Company Name</th>
        <td colspan="2">7 Eleven</td>
    </tr>
    <tr>
        <th>Tier</th>
        <td colspan="2">3</td>
    </tr>
    <tr>
        <th rowspan="5">Service</th>
        <th>VAPT</th>
        <td>Success</td>
    </tr>
    <tr>
        <th>Training</th>
        <td>Success</td>
    </tr>
    <tr>
        <th>ISGRIC</th>
        <td>Success</td>
    </tr>
    <tr>
        <th>CHA</th>
        <td>Success</td>
    </tr>
    <tr>
        <th>Awareness</th>
        <td>Success</td>
    </tr>
    <tr>
        <th>Scoring</th>
        <td colspan="2">50%</td>
        </tr>
</table>
            </div>
                
        </div>
    </div>
</div>

@endsection