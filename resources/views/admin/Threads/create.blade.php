@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1 class="text-center"> Create Thread</h1>
          <form method="POST" action="{{route('threads.store')}}">
            @csrf
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Author</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="author">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
            </div>
            {{-- <div class="mb-3">
              <select class="form-select" name="role_id">
                  <option selected>Select The User</option>
                  @foreach ($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach>
              </select>
          </div> --}}
              <button type="submit" class="btn btn-success">Submit Thread</button>
          </form>    
        </div>
    
@endsection