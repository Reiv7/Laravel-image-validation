@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1 class="text-center"> Show {{$thread->title}} Information</h1>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Author</label>
            <input type="text" class="form-control" value="{{$thread->author}}" readonly>
          </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control"value="{{$thread->title}}" readonly>
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Description</label>
              <input type="text" class="form-control" value="{{$thread->content}}" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>    </div>
    
@endsection