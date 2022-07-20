@extends('dashboards.admins.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                <table class="table table-striped">
                    <tr>
                        <th>Company Name</th>
                        <td>{{ $registermp->companyfullname }}</td>
                    </tr>
                    <tr>
                        <th>Company Address</th>
                        <td>{{ $registermp->companyaddress }}</td>
                    </tr>
                    <tr>
                        <th>Postcode </th>
                        <td>{{ $registermp->postcode }}</td>
                    </tr>
                    <tr>
                        <th>City </th>
                        <td>{{ $registermp->city }}</td>
                    </tr>
                    <tr>
                        <th>State </th>
                        <td>{{ $registermp->state }}</td>
                    </tr>
                    <tr>
                        <th>Contact Person </th>
                        <td>{{ $registermp->name }}</td>
                    </tr>
                    <tr>
                        <th>Mobile Phone</th>
                        <td>0{{ $registermp->mobileno }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $registermp->email }}</td>
                    </tr>
                    <tr>
                        <th>Geography</th>
                        <td>{{ $registermp->geography }}</td>
                    </tr>
                    <tr>
                        <th>In which sectors does your<br> company mainly involved?</th>
                        <td>{{ $registermp->inwhichsectorsdoesyourcompanymainlyinvolved }}</td>
                    </tr>
                    <tr>
                        <th>Could you give in detail<br> the subsectors of the business</th>
                        <td>{{ $registermp->couldyougiveindetailthesubsectorsofthebusiness }}</td>
                    </tr>
                    <tr>
                        <th>In which Government Agencies <br>does the company has mainly attached to</th>
                        <td>{{ $registermp->inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto }}</td>
                    </tr>
                    <tr>
                        <th>Others Agencies</th>
                        <td>{{ $registermp->othersagencies }}</td>
                    </tr>
                </table>
                <br>
                <div class="row">
                    <div class="update ml-auto mr-auto text-end">
                        <a class="btn btn-secondary" href="{{ route('registermps.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection