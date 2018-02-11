<nav id="mainNavigation" class="navbar navbar-toggleable-md navbar-light bg-faded mb-5">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">{{ App\Setting::getValueByKey('brand') }}</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @foreach (App\Category::navigation() as $navigationElement)
                <li class="nav-item">
                    <a class="nav-link" href="/categories/{{ $navigationElement->slug }}">{{ $navigationElement->name }}</a>
                </li>
            @endforeach
        </ul>
        <ul class="navbar-nav">
            @if (Auth::check())
                <li class="nav-item dropdown dropdown-menu-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->completeName() }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            @endif 
        </ul>
    </div>
</nav>