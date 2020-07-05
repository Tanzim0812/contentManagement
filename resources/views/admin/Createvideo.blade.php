@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: whitesmoke">
        <div class="col-sm-4 float-right"><a class="btn btn-info mt-2" href="{{route('manage_video')}}">Manage Video</a></div>

        @include('admin.messageshow')
        <h2>Create Video form</h2>
        <form class="form-horizontal" method="post" action="{{route('save_video')}}" enctype="multipart/form-data">
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
                <label class="control-label col-sm-2" for="link">Video Link:</label>
                <div class="col-sm-10">
                    <span style="font-size: 12px">(Need to have an embed code visit <a href="https://www.classynemesis.com/projects/ytembed/">this page</a> to embed your video)</span>
                    <input type="text" class="form-control" id="link" name="link">
                    @error('link')
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
