@extends('dashboards.admins.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">

            <div class="card-body overflow-hidden shadow-lg">
                <h4 class="card-title"></h4>
                <div class="table table-responsive ">
                    <table class="table" style="border-color:orange;">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>No</th>
                                        <th>SME</th>
                                        <th>Tier</th>
                                        <th colspan="5" class="text-center">Services</th>
                                        <th>Scoring</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>VAPT</th>
                                        <th>CHA</th>
                                        <th>ISGRIC</th>
                                        <th>Training</th>
                                        <th>Awareness</th>
                                        <th></th>
                                        <th></th> 
                                    </tr>                                                                       
                                </thead>
                                @php
                                $i=0;
                                @endphp
                
                               <tbody style="border-color:orange;">
                                @foreach ( $data as $value)
                                   <tr>
                                    
                                        <td>{{++$i}}</td>
                                        <td>{{ $value->companyfullnamesme }}</td>
                                        <td>{{ $value->finaltier }}</td>
                                   
                                    
                                    <td>
                                        <span class="badge rounded-pill bg-success">Success</span>
                                    </td>
                                    <td>
                                            <span class="badge rounded-pill bg-primary">Ongoing</span>
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-success">Success</span>
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-danger">Expired</span>
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-warning text-dark">Pending</span>
                                    </td>
                                    <td>67%</td>
                                    <td class="text-end">
                                        <form action="" method="POST" onsubmit="return confirm('Are you sure want to delete data?')">
                                            <div class= "btn-group">
                                                <a href="{{url('index1')}}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Show"> <i class="fa fa-eye"></i></a>
                                                {{-- {{ route('pgpksprogrammes.show',$pgpksprogramme->id) }} --}}
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </div>
    
                                        </form>
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
</div>
    
@endsection