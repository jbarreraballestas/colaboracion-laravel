<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($route_name == 'contributors') ? 'active disabled' : '' }}"
                        href="{{ route('contributors') }}">{{__('Contributors')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($route_name == 'admin.roles') ? 'active disabled' : '' }}" href="{{ route('admin.roles') }}">{{__('Roles')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">{{$route_name}}</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            @auth

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="{{route('profile')}}">{{__('Profile')}}</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">{{__('Log out')}}</a></li>
                        </ul>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
