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
                @if($errors->any())
                <p style="color:red">Following errors exists in your excel file</p>
                <ol>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ol>
               @endif
                <br>
                <div class="float-end">
                    <a href="export-csv" class="btn btn-secondary btn-user float-right">Export to excel</a>
                 </div><br><br>
                 <div class="table table-responsive ">
                    <table class="table" style="border-color:#f78f1e;">
                        <thead class=" table-secondary">
                            <th>No</th>
                            <th>SME</th>
                            <th>State</th>
                            {{-- <th>Remark</th> --}}
                            <th>Tier</th>
                            <th>Action</th>
                            <th></th>
                        </thead>
                        <tbody style="border-color:#f78f1e;">
                        @php
                        $i=0;
                        @endphp
                        @foreach ($smeexcels as $key => $smeexcel)
                        <tr>
        
                            <td>{{ $smeexcels->firstItem() + $key }}</td>
                            <td>{{ Str::upper($smeexcel->companyfullname)  }}</td>
                            <td>{{ $smeexcel->state }}</td>
                            {{-- <td>{{ $smeexcel->remarks }}</td> --}}
                            <td>{{ $smeexcel->finaltier }}</td>
                            <td>
                                <form action="{{ route('smeexcels.destroy', $smeexcel->id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete data?')">
                                    <div class= "btn-group">
                                        <a href="{{ route('smeexcels.show',$smeexcel->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Show"> <i class="fa fa-eye"></i></a>
                                        <a href="{{ route('smeexcels.edit',$smeexcel->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                    
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('smeexcel.accept',$smeexcel->id)}}" method="POST" class="formacept" id="post" onsubmit="return confirm('Confirm the acception?')" >
                                    @csrf
                                    <button type="submit" class="btn btn-primary" id="submit_btn" >Accept</button></a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                 </div>
                {{ $smeexcels->onEachSide(1)->links() }} 

                <form action="./index" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <input type="file" name="smeexcel_file" accept=".xlsx,.xls,.csv" required>
                            <div class="float-end">
                                <input type="submit" class="btn btn-success btn-user float-right" value="Upload">
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                   
            </div>
        </div>
    </div>
   
</div>
@endsection


