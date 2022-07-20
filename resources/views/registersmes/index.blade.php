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
                <div class="table table-striped">
                    <table class="table " style="border-color:#f78f1e;">
                            <thead class=" table-secondary">
                                <th>No</th>
                                <th>SME</th>
                                <th>Tier</th>
                                <th class="text-end">Action</th>
                            </thead>
                            @php
                            $i=0;
                            @endphp
                            @foreach ($registersmes as $registersme)
                            <tbody style="border-color:#f78f1e;">
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{ Str::upper($registersme->companyfullname) }}</td>
                                    <td>{{ $registersme->finaltier }}</td>
                                    <td class="text-end">

                                    <form action="{{ route('registersmes.destroy', $registersme->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete data?')">
                                        <div class="btn-group">
                                        {{-- <a href="{{ url('createuser') }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Add User"> <i class="fa fa-plus"></i></a> --}}
                                        <a href="{{ route('registersmes.show',$registersme->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Show"> <i class="fa fa-eye"></i></a>
                                        <a href="{{ route('registersmes.edit',$registersme->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>

                                        @csrf
                                        @method('DELETE')
                                        {{-- <span data-feather="trash-2"></span> --}}
                                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {{ $registersmes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection