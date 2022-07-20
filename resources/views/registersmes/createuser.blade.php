@extends('dashboards.admins.layouts.main')

@section('content')
{{-- jadikan center login --}}
<div class="row justify-content-center">
  <div class="col-lg-5">
    
    {{-- register form --}}
    <main class="form-registration">
        
          <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <form action="/register" method="post">
                @csrf

          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name">
           
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
          </div>

          <div class="form-floating">
            <input type="text" name="username" class="form-control  rounded-top @error('username') is-invalid @enderror" id="username" placeholder="Username">
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
          </div>

          <div class="form-floating">
            <input type="text" name="email" class="form-control  rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
          </div>

          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('email') is-invalid @enderror" id="password" placeholder="Password">
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
          </div>
      
          {{-- button submit --}}
          <div class="form-group">
            <div class="form-floating">
              <div class="update ml-auto mr-auto text-center">
                <br>
                <button class="btn btn-secondary btn-round" type="submit">Login</button>
            </div>
          </div>
            </div>
          
        </form>

        {{-- untuk register menggunakan hyperlink --}}
        <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>

      </main>
    
    
  </div>
</div>



@endsection