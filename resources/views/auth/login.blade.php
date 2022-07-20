@extends('layouts.main')

@section('container')
{{-- jadikan center login --}}
<title>Login</title>
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="logo text-center">
      <br><img src="../img/csm.png" style="width:60%"><br><br><br>       
    </div>

    {{-- condition kalau success --}}
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}{{-- pop up dismissing --}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}{{-- pop up dismissing --}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    
    <main class="form-signin">
      <div class="m rounded overflow-hidden shadow-lg">
        <div class="col-md mx-auto">
            <div class="card shadow">
              <div class="card-header" style="background-color: #f78f1e;">
                  <h5 class="card-title text-center">Login</h5>
                </div>
                <div class="card-body">
                <form action="/login" method="post">
                  @csrf
                  <div class="row p-2">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="form-floating">
                          <input type="email" name="email" class="form-control @error('email') is-invalid 
                          @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                          <label for="email">Email address</label>
                          @error('email')
                          <div class="invalid-feedback" role="alert">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="row p-2">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                          </div>
                        </div>
                      </div>
                    </div>    

                  {{-- button submit --}}
                  <div class="form-group">
                  <div class="form-floating">
                    <div class="update ml-auto mr-auto text-center">
                      <button class="btn btn-secondary btn-round" type="submit">Login</button>
                  </div>
                </div>
                  </div>
              </form>
                </div>

              {{-- untuk register menggunakan hyperlink --}}
              <small class="d-block text-center mt-3 p-2">Not Registered? <a href="/register">Register now!</a></small>
            </div>
          </div>
       </div>
    </main>
    
    </div>
</div>



@endsection