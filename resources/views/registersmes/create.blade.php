@extends('dashboards.admins.layouts.main')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12 p-4">
            <div class="card-body overflow-hidden shadow-lg">
                    <h4 class="card-title text-center">Register Company</h5>
                
                <div class="card-body">
                    <form action="{{ route('registersmes.store') }}" method="POST">
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

                          <hr>  
                          
                          <div class="row">
                            <div class="col-3">
                              <div class="">
                                <p>B!</p>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="numbers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="b1" name="b1"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee as free lancers</label>
                                            <input type="text" id="b2" name="b2"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">ow many of employee, Full-time and free lancers who have access to the company’s IT facilities and use them on daily operation/label>
                                            <input type="text" id="b3" name="b3"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">HWhat is your yearly turnover average, in the last 3 years? (RM)</label>
                                            <input type="text" id="b4" name="b4"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How much does the company spent and invest in ICT for the past 5 years?</label>
                                            <input type="text" id="b5" name="b5"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">In relation to question above, in which area does your company spent and invest in ICT for the past 5 years?</label>
                                            <input type="text" id="b6" name="b6"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">ow muc
                                            <label for="geography" class="form-label">HWhat is the company paid up capital?<</label>
                                            <input type="text" id="b7" name="b7"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">Any plan to upgrade the company’s ICT in 3 years from now</label>
                                            <input type="text" id="c8" name="c8"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">In which area does the company is planning to upgrade its ICT in 3 years from now?</label>
                                            <input type="text" id="c9" name="c9"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">In what aspect do you know the importance of the cybersecurity the most?</label>
                                            <input type="text" id="c10" name="c10"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">Do you have physical infra, could you list down the main components used in your company?</label>
                                            <input type="text" id="c11" name="c11"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">To join PGPKS, the company need to expose their internal IPs / network to CYBERSECURITY MALAYSIA or its associate. Are you willing to expose your network for the VAPT / CMERP purposes?</label>
                                            <input type="text" id="c12" name="c12"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many in the company is connected to the company's internet, ICT device inclusive their own device for company's daily operation and personal use? (Average per day)</label>
                                            <input type="text" id="c13" name="c13"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">HHave your company encounter any cyber threat before such as wire transfer fraud or ransomware?</label>
                                            <input type="text" id="c14" name="c14"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">Are your information security and business priorities aligned?</label>
                                            <input type="text" id="c15" name="c15"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">Are you aware on the importance of cyber security in your business?</label>
                                            <input type="text" id="c16" name="c16"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="c17" name="c17"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">Do you feel that it is important to have cybersecurity in your business?</label>
                                            <input type="text" id="c18" name="c18"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="c19" name="c19"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="c20" name="c20"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="c21" name="c21"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="c22" name="c22"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="c23" name="c23"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="d24" name="d24"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="d25" name="d25"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="d26" name="d26"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="d27" name="d27"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="othersagencies26" name="othersagencies26"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="d28" name="d28"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="d29" name="d29"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="d30" name="d30"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="d31" name="d31"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="finaltier" name="finaltier"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="earlymanualsmecategory" name="earlymanualsmecategory"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="earlystatus" name="earlystatus"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="geography" class="form-label">How many of employee in your company (full-time)</label>
                                            <input type="text" id="remarks" name="remarks"  class="form-control" placeholder=" ">
                                    <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                                        </div>
                                    </div>                    
                                </div>
                                


                          </div>
                          
                       
                        <div class="row">
                            <div class="update ml-auto mr-auto text-center"><br>
                                <button type="submit" class="btn btn-secondary btn-round ">Register</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection