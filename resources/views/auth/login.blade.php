@extends('layout.layout')

@section('content')
    @extends('layout.navigation')
    <div class="container">

      <div class=" d-flex align-items-center justify-content-center">
        <div class="col-md-6 bg-white p-6 round-lg mt-5">
          <h3>Sign In</h3>
          @if (session('status'))
              <div class="alert alert-danger mt-2 p-4  mb-3">
                  {{ session('status') }}
              </div>
          @endif
          <hr>
          <form action="{{ route('login.auth') }}" method="POST">
            @csrf
            
            <div class="form-group ">
              <label for="EmployeeNo" >Emp. Number</label>
              <input type="text"  class="form-control 
              @error('employeeNo') border border-danger  @enderror" name="employeeNo"
              value="{{ old('employeeNo') }}"/>

              @error('employeeNo')
                  <div class="text-danger mt-2 text-sm">
                      Employee number field is required
                  </div>
              @enderror
            </div>
            <div class="form-group ">
              <label for="Password" >Password</label>
              <input type="password" class="form-control 
              @error('password') border border-danger @enderror" name="password"
              value="{{ old('email') }}"/>

              @error('password')
                  <div class="text-danger mt-2 text-sm">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary">Login</button>
          </form>

          
        </div>
      </div>
      
        
    </div>
@endsection