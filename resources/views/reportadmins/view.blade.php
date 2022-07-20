@extends('dashboards.admins.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        {{-- <div class="col-md-12 p-4">  
            <div class="card-body overflow-hidden shadow-lg">  
                <p><b>Title:</b> {{ $data->name }}</p>  
                <p><b>Description:</b> {{ $data->description }}</p>  
            </div>
        </div> --}}
                    
                    <iframe height="1000" width="1000" src="/reports/{{ $data->file }}">
                    </iframe>
            </div>
        </div>
    </div>
</div>
    
@endsection
