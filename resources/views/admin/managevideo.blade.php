<!DOCTYPE html>
<html>
<head>
    <title>Content management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>
<body>

<div class="container">
    <h4 class="text-center mb-2 bg-info">Manage Video</h4>
    <div class="col-md-12">
        <table id="example1" class="table table-striped table-bordered" style="border: 1px solid midnightblue">
            <thead class="bg-info">
            <tr>
                <th>Si no</th>
                <th>Link</th>
                <th>Title</th>
                <th>Body</th>
                <th>Video_status</th>
                <th>Created at</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @include('admin.messageshow')

            @foreach( $show as $row)
                <tr>
                    <td>{{$loop->index +1}}</td>
                    <td><iframe src="{{$row->link}}" width="200" height="200" frameborder="0"></iframe></td>
                    <td>{{$row->title}}</td>
                    <td>{{substr($row->body,0,150)}}</td>
                    <td><input type="checkbox" data-toggle="toggle" data-on="Publish" data-off="Unpublish" id="videostatus" data-id="{{$row->id}}" {{$row->status==1 ? 'checked':''}} ></td>
                    <td>{{$row->created_at}}</td>
                    <td><a href="{{route('delete-video',$row->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a></td>

                </tr>


            @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example1').DataTable();
    } );
</script>

<script>
    $('body').on('change', '#videostatus', function () {
        var id = $(this).attr('data-id');
        if (this.checked) {
            var video_status = 1;
        } else {
            var video_status = 0;
        }
        $.ajax({
            url: 'video-status/' + id + '/' + video_status,
            method: 'get',
            success: function (result) {
                console.log(result);
            }
        });

    });
</script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>


