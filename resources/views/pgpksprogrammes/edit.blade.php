@extends('dashboards.admins.layouts.main')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
              <div class="row">
                <div class="col-3"><h5>company name</h5></div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        {{-- <form action="{{ route('pgpks_event.update', $pgpks_event->id) }}" method="POST"> --}}
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>VAPT</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyfullnamemp" class="form-label">Authorize Partners</label>
                                            <input type="text" name="companyfullnamemp" id="companyfullnamemp" class="form-control" disabled>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Start Date</label>
                                            <input type="date" class="form-control" id="startdate" name="startdate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">End Date</label>
                                            <input type="date" class="form-control" id="enddate" name="enddate" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Actual Start Date</label>
                                            <input type="date" class="form-control" id="actualstartdate" name="actualstartdate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Actual End Date</label>
                                            <input type="date" class="form-control" id="actualenddate" name="actualenddate" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="text" name="status" id="status" class="form-control">
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="remarks" class="form-label">Remarks</label>
                                            <input type="text" name="companyfullnamemp" id="remarks" class="form-control" disabled>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto text-end"><br>
                                        <button type="submit" class="btn btn-secondary">Approve</button>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <hr> 

                          <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>CHA</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyfullnamemp" class="form-label">Authorize Partners</label>
                                            <input type="text" name="companyfullnamemp" id="companyfullnamemp" class="form-control" disabled>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Start Date</label>
                                            <input type="date" class="form-control" id="startdate" name="startdate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">End Date</label>
                                            <input type="date" class="form-control" id="enddate" name="enddate" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Actual Start Date</label>
                                            <input type="date" class="form-control" id="actualstartdate" name="actualstartdate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Actual End Date</label>
                                            <input type="date" class="form-control" id="actualenddate" name="actualenddate" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="text" name="status" id="status" class="form-control">
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="remarks" class="form-label">Remarks</label>
                                            <input type="text" name="companyfullnamemp" id="remarks" class="form-control" disabled>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto text-end"><br>
                                        <button type="submit" class="btn btn-secondary">Approve</button>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <hr> 

                          <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>Awareness Session</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyfullnamemp" class="form-label">Authorize Partners</label>
                                            <input type="text" name="companyfullnamemp" id="companyfullnamemp" class="form-control" disabled>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Start Date</label>
                                            <input type="date" class="form-control" id="startdate" name="startdate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">End Date</label>
                                            <input type="date" class="form-control" id="enddate" name="enddate" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Actual Start Date</label>
                                            <input type="date" class="form-control" id="actualstartdate" name="actualstartdate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Actual End Date</label>
                                            <input type="date" class="form-control" id="actualenddate" name="actualenddate" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="text" name="status" id="status" class="form-control">
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="remarks" class="form-label">Remarks</label>
                                            <input type="text" name="companyfullnamemp" id="remarks" class="form-control" disabled>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto text-end"><br>
                                        <button type="submit" class="btn btn-secondary">Approve</button>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <hr> 

                          <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>ISGRIC</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyfullnamemp" class="form-label">Authorize Partners</label>
                                            <input type="text" name="companyfullnamemp" id="companyfullnamemp" class="form-control" disabled>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Start Date</label>
                                            <input type="date" class="form-control" id="startdate" name="startdate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">End Date</label>
                                            <input type="date" class="form-control" id="enddate" name="enddate" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Actual Start Date</label>
                                            <input type="date" class="form-control" id="actualstartdate" name="actualstartdate" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Actual End Date</label>
                                            <input type="date" class="form-control" id="actualenddate" name="actualenddate" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="text" name="status" id="status" class="form-control">
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="remarks" class="form-label">Remarks</label>
                                            <input type="text" name="companyfullnamemp" id="remarks" class="form-control" disabled>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto text-end"><br>
                                        <button type="submit" class="btn btn-secondary">Approve</button>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <hr> 

                        
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