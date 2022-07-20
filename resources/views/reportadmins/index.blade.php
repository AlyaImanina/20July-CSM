@extends('dashboards.admins.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>  
                @endif

                <div class="card-body overflow-hidden shadow-lg">                    
                    <div class="table table-striped table-responsive">
                        <table class="table " style="border-color:#f78f1e;">
                            <thead class="table-secondary">
                                <th>No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="text-end">Action</th>
                            </thead>
                            <tbody style="border-color:#f78f1e;">
                                @php
                                $i=0;
                                @endphp
                                @foreach ($upload as $upload)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ Str::upper($upload->name)  }}</td>
                                        <td>{{ $upload->description }}</td>
                                        {{-- <td><a href="{{ url('/admin/view',$upload->id) }}">View</a></td>
                                        <td><a href="{{ url('/admin/download', $upload->file) }}">Download</a></td> --}}
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <a href="{{ url('/admin/view',$upload->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Show"> <i class="fa fa-eye"></i></a>                                            
                                                <a href="{{ url('/admin/download', $upload->file) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Download"> <i class="fa fa-download"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection