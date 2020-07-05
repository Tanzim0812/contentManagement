@extends('layouts.app')

@section('content')

<div class="container" style="background-color: whitesmoke">
    <div class="col-sm-4 float-right"><a class="btn btn-info mt-2" href="{{route('manage_post')}}">Manage Post</a></div>
    @include('admin.messageshow')
    <h2>Create a Post</h2>
    <form class="form-horizontal" method="post" action="{{route('save_post')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Title:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
                @error('title')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="body">Title:</label>
            <div class="col-sm-10">
                <textarea id="body" name="body" class="form-control"></textarea>
                @error('body')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="image">Choose Image:</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @error('image')
                <strong class="text-bold text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="reset">
                    <label><input type="reset" name="reset"></label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success mb-2">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
