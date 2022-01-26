@extends('layouts.admin')
@section('content')
    <h1 class="text-center">All Threads</h1>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Author</th>
                <th scope="col">Created_At</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($threads as $thread )
                    
                
              <tr>
                <th scope="row">1</th>
                <td><img src="{{URL::asset('img/')}}/{{$thread->image}}"height="50vh"></td>
                <td>{{$thread->title}}</td>
                <td>{{$thread->content}}</td>
                <td>{{$thread->author}}</td>

                <td>{{$thread->created_at}}</td>
                {{-- <td class="btn-group" role="group" aria-label="Basic example"> 
                    <a class="btn btn-info" href="{{route('threads.show', $thread->id)}}" >Show</a>
                    <a class="btn btn-warning" href="{{route('threads.edit', $thread->id)}}">Edit</a>
                    <form method="POST" action="{{route('threads.destroy' ,$thread->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete" title="click for delete" onclick="return confirm('Are You Sure You Want To Delete This User?')">
                    </form>
                    <a class="btn btn-dark">Add Role</a>
                </td> --}}
              </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{route('threads.create')}}" class="btn btn-success">Create Thread</a>
    </div>
@endsection