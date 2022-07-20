@extends('dashboards.admins.layouts.main')
@section('content')
<!--========================================================================CONTENT=========================================================================================================-->
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-6 p-4">
            <div class="card-body overflow-hidden shadow-lg">
    
    {{-- register form --}}
    <div class="row justify-content-center">
      <div class="col-md-8">
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
                <button class="btn btn-secondary btn-round" type="submit">Register</button>
            </div>
          </div>
            </div>
          
        </form>
      </main>
      </div>
    </div>
    
    
  </div>
</div>
</div>



@endsection