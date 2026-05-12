@extends('common.main')
@section('title', 'Forum')
@section('content')

<div class="container py-4">

  <h3 class="mb-4">Forum</h3>

  <form method="POST" action="{{ route('post.store') }}" class="mb-5">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <textarea class="form-control" id="title" name="title" rows="2" placeholder="Post title" required></textarea>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="4" placeholder="Write your post..." required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Created By</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $post->title }}</td>
          <td>{{ $post->description }}</td>
          <td>{{ $post->created_by }}</td>
          <td>{{ $post->status }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@endsection
