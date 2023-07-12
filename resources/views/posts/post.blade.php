@include('layouts.header')

<div class="container p-3">
    <h2>Blogs</h2>
    <div class="row">
        <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{$posts->post_title}}</h5>
        <p class="card-text">{{$posts->post_desc}}</p>
        <a class="btn btn-primary" href="/">Back</a>
        </div>
        </div>
        </div>
</div>

@include('layouts.footer')