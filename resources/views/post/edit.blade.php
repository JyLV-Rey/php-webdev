@extends('common.main')
@section('title', 'Forum')
@section('content')

<div class="container py-4">

  <h3 class="mb-4">Forum</h3>

          @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
            <ul class="mb-0">
              <li>{{ $error }}</li>
            </ul>
            @endforeach
          </div>
          @endif
  <form method="POST" action="{{ route('post.update', $post->id) }}" class="mb-5">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <textarea class="form-control" id="title" name="title" rows="2" placeholder="Post title" required> {{ $post->title }} </textarea>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="4" placeholder="Write your post..." required> {{ $post->description }} </textarea>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
                @foreach ($status as $stat)
                   @if ($post->status == $stat->id)
                        <option value="{{ $stat->id }}" selected>{{ $stat->name }}</option>
                    @else
                        <option value="{{ $stat->id }}" selected>{{ $stat->name }}</option>
                    @endif
                @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</div>
@endsection
