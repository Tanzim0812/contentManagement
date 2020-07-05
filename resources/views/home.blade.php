@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center alert-info">Hello <b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b> !!</div><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5>Create a Post</h5>
                <p class="clearfix">Writing a blog post is a little like driving; you can study the highway code (or read articles telling you how to write a blog post) for months, but nothing can prepare you for the real thing like getting behind the wheel and hitting the open road. Or something.Writing a blog post is a little like driving; you can study the highway code (or read articles telling you how to write a blog post) for months, but nothing can prepare you for the real thing like getting behind the wheel and hitting the open road. Or something.</p>
                <a href="{{route('post')}}" class="btn btn-info">Create a Post</a>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h5>Create a video</h5>
                <p class="clearfix">The average person spends more time watching videos online than reading text or looking at images. In fact, video accounted for 73% of all online traffic in 2016—meaning that when someone’s on the internet, there’s a high probability they’re watching a video.

                    It’s the easiest and most popular type of content to consume because: a) it’s so much easier to watch a video about, say, a Photoshop technique than read about it, and b) it’s the most powerful and versatile medium to communicate a message and engage an audience (second to live communication). </p>
                <a href="{{route('video')}}" class="btn btn-info">Create a Video</a>
            </div>
        </div>
    </div>
</div>
@endsection
