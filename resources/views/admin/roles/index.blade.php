@extends('layout.layout')

@section('content')
    @extends('layout.navigation')
    <div class="container">
        <div class=" d-flex justify-content-center">
            <div class="col-md-6 bg-white p-6 round-lg">
                <h3 class="mt-3">Roles</h3>
                <hr>
                <form action="{{ route('roles.store') }}" method="post" class="form-inline">
                    @csrf
                    <div class="form-row align-items-center">
                        <div class="form-group ">
                            <label for="Name" >Emp. Role</label>
                            <input type="text" class="form-control ml-2
                            @error('role') border border-danger @enderror" name="role"/>
        
                            @error('role')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="ml-2">
                            <button class="btn btn-primary btn-block">
                                Save
                            </button>
                        </div>
                    </div>
                    
                </form>
                @if ($roles->count())
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->Role }}</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="#" class="btn btn-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                @else
                    <tr>
                        <p>There are no roles</p>
                    </tr>
                @endif
            </div>
        </div>
    </div>
@endsection