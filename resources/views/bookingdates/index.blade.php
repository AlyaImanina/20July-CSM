@extends('dashboards.admins.layouts.main')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                    @if ($message = Session::get('danger'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>  
                    @elseif ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>  
                    @endif           
                    <div class="table table-responsive">
                        <table class="table" style="border-color:#f78f1e;">
                            <thead class="table-secondary">
                                <th>No</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>SME</th>
                                <th>TIER</th>
                                <th>Authorize Partner</th>
                                <th>Programme</th>
                                <th class="text-end">Action</th>
                            </thead>
                            <tbody style="border-color:#f78f1e;">
                                @php
                                $i=0;
                                @endphp
                                @foreach ($bookingdates as $key => $bookingdate)
                                <tr>
                                    <td>{{$bookingdates->firstItem() + $key}}</td>
                                    <td>{{ $bookingdate->startdate  }}</td>
                                    <td>{{ $bookingdate->enddate  }}</td>
                                    <td>{{ Str::upper($bookingdate->companyfullnamesme)  }}</td>
                                    <td>{{ $bookingdate->finaltier  }}</td>
                                    <td>{{ Str::upper($bookingdate->companyfullnamemp)  }}</td>
                                    <td>{{ Str::upper($bookingdate->service)  }}</td>
                                    <td class="text-end">
                                        <form action="{{ route('bookingdates.destroy', $bookingdate->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete data?')">
                                            <div class="btn-group">
                                                <a href="{{ route('bookingdates.edit',$bookingdate->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>               
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                {{ $bookingdates->onEachSide(1)->links() }} 
                <div class="update ml-auto mr-auto text-end">
                    <a class="btn btn-secondary btn-round" href="{{ route('bookingdates.create') }}">Booking Date</a>
                </div>
            </div>
        </div>
    </div>
</div>
                
    
@endsection