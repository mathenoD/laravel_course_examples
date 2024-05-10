@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h2>Posts</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->created_at->toFormattedDateString() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
