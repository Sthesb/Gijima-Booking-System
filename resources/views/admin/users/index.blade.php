@extends('layout.layout')

@section('content')
    @extends('layout.navigation')
    <div class="container">
        
          <h3 class="mt-5">List of Users</h3>
          <a href="{{ route ('user.create') }}" class="btn btn-sm btn-primary">Add User</a>
        
        @if ($users->count())
          <table class="mt-3 table table-striped">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Location</th>
                <th scope="col">
                    
                </th>
              </tr>
            </thead>
            <tbody>

              @foreach ($users as $user)
                <tr>
                  <td>{{ $user->name}}</td>
                  <td>{{ $user->surname }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                      <a href="{{route('user.show', $user)}}" class="btn btn-info">View <i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a href="#" class="btn btn-warning">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a>
                      <a href="#" class="btn btn-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @else
            <p>There are no users</p>
        @endif
    </div>

@endsection