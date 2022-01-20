@extends('layouts.admin')
@section('content')
    <h1 class="text-center">All Users</h1>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created_At</th>
                {{-- <th scope="col">Role</th> --}}
                <th scope="col">Control</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                    
                
              <tr>
                <th scope="row">1</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                {{-- <td>{{$user->role_id}}</td> --}}
                <td class="btn-group" role="group" aria-label="Basic example"> 
                    <a class="btn btn-info" href="{{route('users.show', $user->id)}}" >Show</a>
                    <a class="btn btn-warning" href="{{route('users.edit', $user->id)}}">Edit</a>
                    <form method="POST" action="{{route('users.destroy' ,$user->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete" title="click for delete" onclick="return confirm('Are You Sure You Want To Delete This User?')">
                    </form>
                    <a class="btn btn-dark" href="{{route('threads.show', $user->thread_id)}}" >Show Threads</a>
                    {{-- <a class="btn btn-dark">Add Role</a> --}}
                </td>
              </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{route('users.create')}}" class="btn btn-success">Add User  </a>
    </div>
@endsection