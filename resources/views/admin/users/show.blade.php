@extends('layout.layout')

@section('content')
    @extends('layout.navigation')
    <div class="container ">
        <h3 class="mt-5">User Details</h3>
        @if ($user->count())

           

            <div class="m-0 p-0 col-md-6">
                <table class="table  ">
                    <tr>
                        <td>Emp. Name</td>
                        <td>:</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Emp. Surname</td>
                        <td>:</td>
                        <td>{{ $user->surname }}</td>
                    </tr>
                    <tr>
                        <td>Emp. Email</td>
                        <td>:</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Emp. Number</td>
                        <td>:</td>
                        <td>{{ $user->employeeNo }}</td>
                    </tr>
                    <tr>
                        <td>Emp. Location</td>
                        <td>:</td>
                        <td>{{ $location->Location }}</td>
                    </tr>
                    <tr>
                        <td>Emp. Role</td>
                        <td>:</td>
                        <td>{{ $role->Role }}</td>
                    </tr>
                    <tr>
                        <td>Emp. Team</td>
                        <td>:</td>
                        <td>{{ $team->Team }}</td>
                    </tr>
                </table>
            </div>
           
        @else
            
        @endif
        
        <a href="{{ route('admin.users') }}"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
@endsection