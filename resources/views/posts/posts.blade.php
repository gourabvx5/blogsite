@include('layouts.header')

<div class="container p-3">
    <h2>Blogs</h2>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{$post->id}}</h5>
        <h5 class="card-title">{{$post->post_title}}</h5>
        <p class="card-text text-truncate">{{$post->post_desc}}</p>
        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary">Read More</a>
        </div>
        </div>
        </div>
        @endforeach
</div>

@include('layouts.footer')