<!DOCTYPE html>
<html lang="en">
<head>
    <title>Content management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h5 class="jumbotron text-center">Content Management</h5>
    <div class="container">
        <div class="row">

            <!----------------------------Video Section------Section 1-------------->

        <div class="col-md-8">
            <p style="text-align: center;color: lightslategray">Section 1</p>
            <div class="row">
            @foreach($video2 as $row2)
            <div class="col-md-6 mt-2">
                <iframe src="{{$row2->link}}" width="370" height="315" frameborder="0"></iframe>
                <h6><b><a href="{{route('showpage',$row2->slug)}}" style="color: #111111">{{$row2->title}}</a></b></h6>
                <p class="clearfix">{{substr($row2->body,0,150)}}......<a href="{{route('showpage',$row2->slug)}}">read more</a></p>
            </div>
            @endforeach

            <div class="col-md-6 mt-2">
                <div class="row">
                    @foreach($video as $row)
                    <div class="col-sm-6">
                        <iframe src="{{$row->link}}" style="width: 150px;height: 120px" frameborder="0"></iframe>
                        <h6><a href="{{route('showpage',$row->slug)}}" style="color: #111111">{{$row->title}}</a></h6>
                    </div>
                    @endforeach
                </div>
            </div>

            </div>
        </div>

                <!--------Post section------SECTION 2--------------------->

        <div class="col-md-4" style="border-left: 1px solid darkgrey">
            <p style="text-align: center;color: lightslategray">Section 2</p>
            @foreach($posst2 as $row2)
            <div class="col-md-12 m-1">
                <img class="img-responsive" src="{{asset('files/uploads/'.$row2->image)}}" style="width: 340px ;height: 310px">
                <h6><b><a href="{{route('showpost',$row2->slug)}}" style="color: #111111">{{$row2->title}}</a></b></h6>
                <p class="clearfix">{{substr($row2->body,0,150)}}.....<a href="{{route('showpost',$row2->slug)}}">read more</a></p>
            </div>
            @endforeach
            <div class="row m-1">
                @foreach($posst as $row)
                <div class="col-md-6">
                    <img src="{{asset('files/uploads/'.$row->image)}}" style="width: 150px;height: 120px">
                    <h6><b><a href="{{route('showpost',$row->slug)}}" style="color: #111111">{{$row->title}}</a></b></h6>
                </div>
                @endforeach
            </div>


        </div>

        </div>
    </div>
</body>
</html>
