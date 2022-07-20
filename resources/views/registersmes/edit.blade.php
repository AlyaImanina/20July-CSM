@extends('dashboards.admins.layouts.main')

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


          <form action="{{ route('registersmes.update',$registersme->id) }}" method="POST">
              @csrf
              @method('PUT')

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
                                  <input type="date" name="datesubmitted" id="datesubmitted" class="form-control" value="{{ $registersme->datesubmitted }}" placeholder="Submitted Date">
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
                      <p>Name</p>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="numbers">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="companyfullname" class="form-label">Company Full Name</label>
                                  <input type="text" name="companyfullname" id="companyfullname" value="{{ $registersme->companyfullname }}" class="form-control" placeholder="Company name">
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
                                  <input id="companyaddress" name="companyaddress" placeholder="Enter your company address" value="{{ $registersme->companyaddress }}"onFocus="geolocate()" type="text" class="form-control">
                                  {{-- <input type="number" class="form-control" placeholder="Contact No"> --}}
                                  <span style="color:red">@error('Fill company address'){{ $message }} @enderror</span>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">Postcode</label>
                                  <input type="number" class="form-control" id="postcode" name="postcode"value="{{ $registersme->postcode }}" placeholder="ZIP Code">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">City</label>
                                  <input type="text" class="form-control" id="city" name="city" value="{{ $registersme->city }}" placeholder="City">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">State</label>
                                  <input type="text" class="form-control" id="state" name="state" value="{{ $registersme->state }}" placeholder="State">
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
                                  <input type="text" id="name" name="name"  class="form-control" value="{{ $registersme->name }}" placeholder="Contact person">
                                  <span style="color:red">@error('Fil contact person'){{ $message }} @enderror</span>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="mobileno" class="form-label">Mobile Phone</label>
                                  <input type="tel" id="mobileno" name="mobileno" class="form-control" value="{{ $registersme->mobileno }}" placeholder="Mobile number">
                                  <span style="color:red">@error('phone no'){{ $message }} @enderror</span>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" id="email" name="email" class="form-control" value="{{ $registersme->email }}" placeholder="Email">
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
                      <p>Tier</p>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="numbers">
                      
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="tier" class="form-label">Tier	</label>
                                  <input type="text" id="finaltier" name="finaltier"  value="{{ $registersme->finaltier }}" class="form-control" placeholder=" ">
                                  <span style="color:red">@error('Fill contact person'){{ $message }} @enderror</span>
                              </div>
                          </div>                    
                      </div>
                    </div>
                  </div>
                </div>
                <br><br>
                


                  <div class="row">
                      <div class="update ml-auto mr-auto text-end">
                       
                          <button type="submit" class="btn btn-secondary btn-round ">Save</button>
                          <a class="btn btn-secondary" href="{{ route('registersmes.index') }}">Cancel</a>
                      </div>
                  </div>
          </form>




      </div>
  </div>
</div>    
@endsection