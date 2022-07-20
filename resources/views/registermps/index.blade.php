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
                        <table class="table " style="border-color:#f78f1e;">
                            <thead class=" table-secondary">
                                <th>No</th>
                                <th>Authorize Partner</th>
                                <th class="text-end">Action</th>
                            </thead>
                            @php
                                $i=0;
                                @endphp
                            @foreach ($registermps as $registermp)
                            <tbody style="border-color:#f78f1e;">
                                
                            <tr>
                                <td>{{ ++$i }}</td>
                                {{-- <td>{{ $registermp->id }}</td> --}}
                                <td>{{ $registermp->companyfullname }}</td>
                                <td class="text-end">
                                    <form action="{{ route('registermps.destroy', $registermp->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete data?')">
                                        {{-- <a href="{{ route('registermps.createuser') }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Show"> <i class="fa fa-plus"></i></a> --}}
                                        <div class="btn-group">
                                            <a href="{{ route('registermps.show',$registermp->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Show"> <i class="fa fa-eye"></i></a>
                                        <a href="{{ route('registermps.edit',$registermp->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                        
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
                        {{ $registermps->links() }}
                    </div>
                    <div class="update ml-auto mr-auto text-end float">
                        <a class="btn btn-secondary btn-round text-right" href="{{ route('registermps.create') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection