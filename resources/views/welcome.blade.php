<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/flat-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/demo.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="../../public/favicon.ico">
</head>
<body>
<div class="container">
    <div class="row demo-row">
        <div class="col">
            <nav class="navbar navbar-inverse navbar-embossed navbar-expand-lg" role="navigation">
                <a class="navbar-brand" href="#">Flat UI</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-01"></button>
                <div class="collapse navbar-collapse" id="navbar-collapse-01">
                    <ul class="nav navbar-nav mr-auto">
                        <li><a href="#fakelink">Menu Item<span class="navbar-unread">1</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages</a>
                            <span class="dropdown-arrow"></span>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#fakelink">About Us</a></li>
                    </ul>
                    <form class="navbar-form form-inline my-2 my-lg-0" action="#" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                                <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                            </div>
                        </div>
                    </form>
                </div><!-- /.navbar-collapse -->
            </nav><!-- /navbar -->
        </div>
    </div> <!-- /row -->
</div>

<script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" ></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="../../public/js/application.js"></script>
</body>
</html>