<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">



      <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>
    

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <!-- Phần này sẽ hiển thị nút khi mà coi bằng smart phone hoặc tablet -->
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <p><span class="glyphicon glyphicon-th-list"></span></p>
            </button>
 
            <!-- Hiển thị brand -->
            <a class="navbar-brand" href="/">My Blog</a>
        </div>
 
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- Menu căn trái -->
            <ul class="nav navbar-nav">
                <li>{!! link_to_route('articles.index', 'Blog') !!}</li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/about">About</a></li>
            </ul>
 
            <!-- Menu căn phải -->
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    {{-- Khi mà chưa login --}}
 
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                @else
                    {{-- Khi mà đang login --}}
 
                    <!-- Drop down menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</body>