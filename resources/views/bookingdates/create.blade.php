@extends('dashboards.admins.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                <div class="card-body">
                    <form action="{{ route('bookingdates.store') }}" method="POST">
                        @csrf
                        <div class="row">                                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="e1" class="form-label">Select SME</label>
                                    <select name="companyfullnamesme" class="form-control selectpicker" data-live-search="true">
                                        <option value="">Please Select</option>
                                        @foreach ($dropdownsme as $item)
                                        <option value="{{ $item->companyfullname }}">{{ $item->companyfullname }}</option>                                            
                                        {{-- <option value="{{ $item->id }}">{{ $item->companyfullname }}</option>                                             --}}
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            {{-- <div class="col-md-2">
                                <div class="form-group">
                                    <label for="finaltier" class="form-label">Tier</label>
                                    <input type="text" id="finaltier" name="finaltier"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                </div>
                            </div> --}}


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="e1" class="form-label">Select Authorize Partners</label>
                                    <select name="companyfullnamemp" class="form-control selectpicker" data-live-search="true">
                                        <option value="">Please Select</option>
                                        @foreach ($dropdownmp as $item)
                                        {{-- <option value="{{ $item->id }}">{{ $item->companyfullname }}</option>             --}}
                                        <option value="{{ $item->companyfullname }}">{{ $item->companyfullname }}</option>                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div><br>

                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="e1" class="form-label">Select Authorize Partners</label>
                                    <select name="companyfullnamemp" class="form-control selectpicker" data-live-search="true">
                                        <option value="">Please Select</option>
                                        @foreach ($dropdownmp as $item)
                                        <option value="{{ $item->companyfullname }}">{{ $item->companyfullname }}</option>                                            
                                        @endforeach
                                    </select>
                                </div>
                            </div>               
                        </div><br> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choosedate" class="form-label">Choose Start Date</label>
                                    <input type="date" id="startdate" name="startdate" class="form-control" placeholder="">
                                    <span style="color:red">@error('Select date'){{ $message }} @enderror</span>
                                </div>
                            </div>      
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="choosetime" class="form-label">Choose End Date</label>
                                    <input type="date" id="enddate" name="enddate" class="form-control" placeholder="">
                                    <span style="color:red">@error('Select time'){{ $message }} @enderror</span>
                                </div>
                            </div>               
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="event" class="form-label">Select Event</label>
                                    <select id="service" name="service" class="form-control selectpicker" data-live-search="true">
                                        <option value="Please select">Please select</option>
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
                        <br>
                        <div class="row">
                            <div class="update ml-auto mr-auto text-end">
                                <button type="submit" class="btn btn-secondary btn-round ">Save</button>
                                <input type="reset" class="btn btn-secondary" value="Reset">
                            </div>
                        </div>
                        
                        
                    </form> 

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection