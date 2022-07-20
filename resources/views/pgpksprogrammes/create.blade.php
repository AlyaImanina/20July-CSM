@extends('dashboards.admins.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Add New fdsgosogsgdsgos</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pgpks_event.index') }}"> Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('pgpks_event.store') }}" method="POST">
                        @csrf
                        <div class="row">                                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="event" class="form-label">Select Event</label>
                                    <select id="event" name="event" class="form-control">
                                      <option value="isric">ISRIC</option>
                                      <option value="cha">CHA</option>
                                      <option value="vapt">VAPT</option>
                                      <option value="awareness">Awareness Session</option>
                                      <option value="training">Training</option>
                                      <option value="intervention">Intervention Plan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date" class="form-label">Choose Date</label>
                                    <input type="date" id="date" name="date" class="form-control" placeholder="">
                                    <span style="color:red">@error('Select date'){{ $message }} @enderror</span>
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="time" class="form-label">Choose Time</label>
                                    <input type="time" id="time" name="time" class="form-control" placeholder="">
                                    <span style="color:red">@error('Select time'){{ $message }} @enderror</span>
                                </div>
                            </div>               
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-default btn-round ">Add Event</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection