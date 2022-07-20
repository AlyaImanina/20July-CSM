{{-- @extends('dashboards.mps.layouts.main')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                 <div class="table table-responsive ">
                    <table class="table" style="border-color:#f78f1e;">
                        <thead class=" table-secondary">
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th class="text-end">Action</th>
                            <th></th>
                        </thead>
                        <tbody style="border-color:#f78f1e;">
                        @php
                        $i=0;
                        @endphp
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ ++$i}}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->description }}</td>
                            <td class="text-end">
                                <div class= "btn-group">
                                    <a href="{{ url('/mp/view',$data->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Show"> <i class="fa fa-eye"></i></a>
                                    <a href="{{ url('/mp/download', $data->file) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Download"> <i class="fa fa-download"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                 </div>
                
                <form action="{{ route('reports.index') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <input type="text" name="name" placeholder="Title">

                            <input type="text" name="description" placeholder="Description">

                            <input type="file" name="file" >
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

 --}}
 
