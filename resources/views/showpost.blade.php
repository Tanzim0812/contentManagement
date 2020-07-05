<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/newspaper/">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/li-scroller.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>
    </style>
    <!--
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e9e08962e509a0012423b6d&product=inline-share-buttons" async="async"></script>-->
</head>
<body>
<div class="container">
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div>
                    <div>
                        <div id="printMe">
                            @foreach($show as $row)
                                <h1>{{$row->title}}</h1>

                                <div class="post_commentbox">
                                    <span><i class="fa fa-calendar"></i>{{$row->created_at}}</span>
                                </div>

                                <div class="single_page_content">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <img class="embed-responsive-item" src="{{asset('files/uploads/'.$row->image)}}">
                                    </div>
                                    <article>
                                        <h4 style="color:#e32114 ">{{$row->title}}</h4>
                                        <p class="clearfix" style="font-size: 16px">
                                            {{$row->body}}
                                        </p>
                                    </article>
                                </div>
                            @endforeach
                        </div>

                        <div class="social_link">
                            <ul class="sociallink_nav">

                                <ul class="sociallink_nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>

                                <!--
                               <div class="sharethis-inline-share-buttons"></div>

                                 <a class="w-inline-block social-share-btn fb" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"> Share fb</a>
                                 <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">Share via Whatsapp</a>-->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <script src="{{asset('files/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('files/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('files/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('files/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('files/assets/js/jquery.li-scroller.1.0.js')}}"></script>
    <script src="{{asset('files/assets/js/jquery.newsTicker.min.js')}}"></script>
    <script src="{{asset('files/assets/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('files/assets/js/custom.js')}}"></script>
</body>
</html>
