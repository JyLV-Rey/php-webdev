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

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option value="" selected>Choose...</option>
                @foreach ($status as $stat)
                    <option value="{{ $stat->id }}">{{ $stat->display_name }}</option>
                @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    <h3 class="mb-4">Search</h3>

  <form class="mb-3" action={{ route('post.search') }}>
        <input class="form-control mr-sm-2" type="search" placeholder="Search"name="param" aria-label="Search">
        <select class="form-select" id="column" name="column" required>
            <option value="title" selected>title</option>
            <option value="description" selected>description</option>
        </select>
        <select class="form-select" id="sort" name="sort" required>
            <option value="ascending" selected>ascending</option>
            <option value="descending" selected>descending</option>
        </select>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Created By</th>
          <th>Status</th>
          <th>Created Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $post->title }}</td>
          <td>{{ $post->description }}</td>
          <td>{{ $post->created_by_name }}</td>
          <td>{{ $post->status_display_name }}</td>
          <td>{{ $post->created_at }}</td>
          <td class="text-center">
            @if($post->status_name != 'published')
            <a class="bi bi-pencil-square d-inline" href={{ 'post/edit/' . $post->id }}></a>

            <form action="{{ route('post.delete', $post->id)}}" class="d-inline" method="POST">
                @csrf
                @method('delete')

                <button class="btn btn-link" type="submit">
                    <i class="bi bi-trash red alert-delete d-inline"></i>
                </button>
            </form>


            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
@endsection
