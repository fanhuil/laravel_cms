<html>
<head>
    <title>首页</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">测试网站</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">用户列表</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                @auth
                    <a href="{{route('user.edit',auth()->user())}}" class="btn btn-outline-success my-2 my-sm-0">修改</a>
                    <a href="/login/logout" class="btn btn-outline-success my-2 my-sm-0">退出</a>
                @else
                    <a href="/login/login" class="btn btn-outline-success my-2 my-sm-0">登录</a>
                    <a href="{{route('user.create')}}" class="btn btn-outline-success my-2 my-sm-0">注册</a>
                @endauth
            </form>
        </div>
    </nav>
    @include('layouts._error')
    @include('layouts._message')
    @yield('content')
</div>
</body>
<script src="/js/app.js"></script>
</html>





