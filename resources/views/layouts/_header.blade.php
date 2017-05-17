<header>
    <nav class="navbar navbar-default navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ route('home') }}" data-toggle="modal" data-taget="#login-modal" class="navbar-brand">Kenneth's Blog</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('help') }}">帮助</a></li>
                    @if (Auth::check())
                        <li><a href="#">用户列表</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }} <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                                <li><a href="#">编辑资料</a></li>
                                <li><a href="#">退出登陆</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a data-toggle="modal" data-target="#signin">登陆</a></li>
                        <li><a data-toggle="modal" data-target="#signup">注册</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
