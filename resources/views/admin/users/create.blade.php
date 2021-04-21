@extends('layout.layout')

@section('content')
    @extends('layout.navigation')
    <div class=" d-flex justify-content-center">
        <div class="col-md-6 bg-white p-6 round-lg">
            <h3 class="text-center mt-3">Create User</h3>
            <hr>
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Name" >Emp. Name</label>
                    <input type="text" class="form-control 
                    @error('name') border border-danger @enderror" name="name"/>

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col-md-6 ">
                        <label for="Name" >Emp. Email</label>
                        <input type="email" class="form-control 
                        @error('email') border border-danger @enderror" name="email"/>
    
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="Name" >Emp. Number</label>
                        <input type="text" class="form-control 
                        @error('employee_number') border border-danger @enderror" name="employee_number"/>
    
                        @error('employee_number')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 ">
                        <label for="Name" >Emp. Location</label>
                        <input type="text" class="form-control 
                        @error('location') border border-danger @enderror" name ="location"/>
    
                        @error('location')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="Name" >Emp. Role</label>
                        <input type="text" class="form-control 
                        @error('role') border border-danger @enderror" name="role"/>
    
                        @error('role')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 ">
                        <label for="Name" >Emp. Team</label>
                        <input type="text" class="form-control 
                        @error('team') border border-danger @enderror" placeholder="team"/>
    
                        @error('team')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 ">
                        <label for="Name" >Emp. Password</label>
                        <input type="password" class="form-control 
                        @error('password') border border-danger @enderror" name = "password" />
    
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="Name" >Confirm Password</label>
                        <input type="password" class="form-control 
                        @error('password_confirmation') border border-danger @enderror" name="password_confirmation"/>
    
                        @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <button class="btn btn-primary btn-block">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
    
@endsection