@extends('dashboards.mps.layouts.main')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">      
                    <div class="table table-responsive ">
                        <table class="table " style="border-color:#f78f1e;">
                             <thead class="table-secondary">
                                <th>No</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>SME</th>
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
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $bookingdate->startdate  }}</td>
                                    <td>{{ $bookingdate->enddate  }}</td>
                                    <td>{{ Str::upper($bookingdate->companyfullnamesme)  }}</td>
                                    <td>{{ Str::upper($bookingdate->companyfullnamemp)  }}</td>
                                    <td>{{ Str::upper($bookingdate->service)  }}</td>
                                   
                                    <td class="text-end">
                                        <form action="{{ route('bookingdates.destroy', $bookingdate->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete data?')">
                                            @csrf
                                            <a href="{{ route('bookingdates.edit',$bookingdate->id) }}" class="btn btn-primary" id="submit_btn" >Action</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $events->onEachSide(1)->links() }} 
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    
@endsection