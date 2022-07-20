@extends('dashboards.mps.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('bookingdates.update', $bookingdate->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-6">
                                <div class="numbers">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="companyfullname" class="form-label">SME</label>
                                                <input id="companyfullname" name="companyfullname" value="{{ $bookingdate->companyfullnamesme }}" placeholder="" onFocus="geolocate()" type="text" class="form-control" disabled>
                                              {{-- <input type="number" class="form-control" placeholder="Contact No"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="numbers">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="companyfullname" class="form-label">Authorize Partnerss</label>
                                                <input id="companyfullname" name="companyfullname" value="{{ $bookingdate->companyfullnamemp }}" placeholder="" onFocus="geolocate()" type="text" class="form-control" disabled>
                                              {{-- <input type="number" class="form-control" placeholder="Contact No"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="startdate" class="form-label">Start date</label>
                                    <input type="date" id="startdate" name="startdate" value="{{ $bookingdate->startdate }}" class="form-control" placeholder="">
                                    <span style="color:red">@error('Select date'){{ $message }} @enderror</span>
                                </div>
                            </div>      
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="enddate" class="form-label">End date</label>
                                    <input type="date" id="enddate" name="enddate" value="{{ $bookingdate->enddate }}" class="form-control" placeholder="">
                                    <span style="color:red">@error('Select date'){{ $message }} @enderror</span>
                                </div>
                            </div>               
                        </div> <br>                    
                        <div class="row">                                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service" class="form-label">Select Event</label>
                                    <select id="service" name="service" value="{{ $bookingdate->service }}" class="form-control">
                                        <option value="Please select">Please select</option>
                                    <option value="isric">ISRIC</option>
                                    <option value="cha">CHA</option>
                                    <option value="vapt">VAPT</option>
                                    <option value="awareness session">Awareness Session</option>
                                    <option value="training">Training</option>
                                    <option value="intervention plan">Intervention Plan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto text-end">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
</div>
</div>
</div>
    
@endsection