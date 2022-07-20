@extends('dashboards.admins.layouts.main')
@section('content')
<!--========================================================================CONTENT=========================================================================================================-->
<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                
                <div class="card-body">
                    <form action="{{ route('registermps.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>Record</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="datesubmitted" class="form-label">Submitted Date</label>
                                            <input type="date" name="datesubmitted" id="datesubmitted" class="form-control" placeholder="Submitted Date">
                                            <span style="color:red">@error('Fill company name'){{ $message }} @enderror</span>
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
                                <p>Company Name</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyfullname" class="form-label">Company Full Name</label>
                                            <input type="text" name="companyfullname" id="companyfullname" class="form-control" placeholder="Company name">
                                            <span style="color:red">@error('Fill company name'){{ $message }} @enderror</span>
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
                                <p>Business Address</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="companyaddress" class="form-label">Company Address</label>
                                            <input id="companyaddress" name="companyaddress" placeholder="Enter your company address" onFocus="geolocate()" type="text" class="form-control">
                                            {{-- <input type="number" class="form-control" placeholder="Contact No"> --}}
                                            <span style="color:red">@error('Fill company address'){{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Postcode</label>
                                            <input type="number" class="form-control" id="postcode" name="postcode" placeholder="ZIP Code">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">State</label>
                                            <input type="text" class="form-control" id="state" name="state" placeholder="State">
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
                                <p>Company Contact</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">                                          
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Contact Person</label>
                                            <input type="text" id="name" name="name"  class="form-control" placeholder="Contact person">
                                            <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobileno" class="form-label">Mobile Phone</label>
                                            <input type="tel" id="mobileno" name="mobileno" class="form-control" placeholder="Mobile number">
                                            <span style="color:red">@error('phone no'){{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                            <span style="color:red">@error('email'){{ $message }} @enderror</span>
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
                                <p>Details</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">Geography - The location of majority of people who use your company's IT facilities for business operations*</label>
                                            <select id="geography" name="geography" class="form-control">
                                              <option value="Please select">Please select</option>
                                              <option value="Johor">Johor</option>
                                              <option value="Kedah">Kedah</option>
                                              <option value="Kelantan">Kelantan</option>
                                              <option value="Kuala Lumpur">Kuala Lumpur</option>
                                              <option value="Labuan">Labuan</option>
                                              <option value="Malacca">Malacca</option>
                                              <option value="Negeri Sembilan">Negeri Sembilan</option>
                                              <option value="Pahang">Pahang</option>
                                              <option value="Perak">Perak</option>
                                              <option value="Perlis">Perlis</option>
                                              <option value="Penang">Penang</option>
                                              <option value="Sabah">Sabah</option>
                                              <option value="Sarawak">Sarawak</option>
                                              <option value="Selangor">Selangor</option>
                                              <option value="Terengganu">Terengganu</option>
                                            </select>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inwhichsectorsdoesyourcompanymainlyinvolved" class="form-label">In which sectors does your company mainly involved?*</label>
                                            <select id="inwhichsectorsdoesyourcompanymainlyinvolved" name="inwhichsectorsdoesyourcompanymainlyinvolved" class="form-control" placeholder="please select">
                                                <option value="Please select">Please select</option>
                                                <option value="agriculture">Agriculture</option>
                                                <option value="mining">Mining & Quarrying</option>
                                                <option value="manufacturing">Manufacturing</option>
                                                <option value="construction">Construction</option>
                                                <option value="services">Services</option>
                                            </select>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="couldyougiveindetailthesubsectorsofthebusiness" class="form-label">Could you give in detail the subsectors of the business	</label>
                                            <input type="text" id="couldyougiveindetailthesubsectorsofthebusiness" name="couldyougiveindetailthesubsectorsofthebusiness"  class="form-control" placeholder=" ">
                                            <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                <label for="inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto" class="form-label">In which Government Agencies does the company has mainly attached to</label>
                                <select id="inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto" name="inwhichGovernmentAgenciesdoesthecompanyhasmainlyattachedto" class="form-control" placeholder="please select">
                                    <option value="Please select">Please select</option>
                                    <option value="MITI">MITI</option>
                                    <option value="MARA">MARA</option>
                                    <option value="MDEC">MDEC</option>
                                    <option value="MTDC">MTDC</option>
                                    <option value="SMECorp">SMECorp</option>
                                    <option value="TPM">TPM</option>
                                    <option value="None">None</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="othersagencies" class="form-label">Other Agencies	</label>
                                    <input type="text" id="othersagencies" name="othersagencies"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                </div>
                            </div>                    
                        </div>

                              </div>
                            </div>
                          </div>
                          
                       
                        <div class="row">
                            <div class="update ml-auto mr-auto text-end"><br>
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
                
                