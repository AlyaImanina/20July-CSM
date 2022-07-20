@extends('dashboards.mps.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4"> 
            <div class="card-body overflow-hidden shadow-lg">
                <h4 class="card-title text-center">Event</h4>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        <div class="row">
                        <div class="update ml-auto mr-auto text-end ">
                            <button type="submit" class="btn btn-secondary btn-round">Update</button>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>Company</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyfullname" class="form-label">Company Name</label>
                                            <input id="companyfullname" name="companyfullname" value="" placeholder="" onFocus="geolocate()" type="text" class="form-control" disabled>
                                            {{-- <input type="number" class="form-control" placeholder="Contact No"> --}}
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>Date</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Start Date</label>
                                            <input type="date" class="form-control" id="startdate" name="startdate" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">End Date</label>
                                            <input type="date" class="form-control" id="enddate" name="enddate" value="">
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>Event</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">PGPKS Programme</label>
                                            <input  class="form-control" id="pgpkgsprogramme" name="pgpkgsprogramme" value="" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status" class="control-label">Status</label>
                                            <select id="status" name="status" value="" class="form-control">
                                                <option value="Please select">Please select</option>
                                                <option value="ongoing">Ongoing</option>
                                                <option value="completed">Success</option>
                                                <option value="expired">Expired</option>
                                                <option value="pending">Pending</option>
                                                <option value="services"></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>Report</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyaddr" class="form-label">Please upload report</label>
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
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div> 
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection