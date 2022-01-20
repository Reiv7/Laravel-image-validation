@extends('layouts.admin')
@section('content')
    <h1 class="text-center">Users</h1>

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                {{-- <th scope="col">Control</th> --}}

              </tr>
            </thead>
            <tbody>
                @foreach ($role_users as $role )
                    
                
              <tr>
                <th scope="row">1</th>
                <td>{{$role->name}}</td>
                {{-- <td class="btn-group" role="group" aria-label="Basic example"> 
                    <a class="btn btn-info" href="{{route('roles.show', $role->id)}}" >Show Users</a>
                    <a class="btn btn-warning" href="{{route('roles.edit', $role->id)}}">Edit</a>
                    <form method="POST" action="{{route('users.destroy' ,$role->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete" title="click for delete" onclick="return confirm('Are You Sure You Want To Delete This User?')">
                    </form> --}}
                    {{-- <a class="btn btn-dark">Add Role</a> --}}
                </td>
              </tr>
                @endforeach
            </tbody>
          </table>
          {{-- <a href="{{route('users.create')}}" class="btn btn-success">Add User  </a> --}}
    </div>
@endsection