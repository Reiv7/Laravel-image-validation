    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/admin">Control Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto" style="width: 300px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('roles.index')}}">Roles</a>                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('threads.index')}}">Threads</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          @if(LaravelLocalization::getCurrentLocale() == "en")
                                <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar')}}">?????????? ??????????????</a></li>
                                @else
                                <li><a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en')}}">English</a></li>
                          @endif
                        </ul>
                      </li>
                    </ul>
                </ul> --}}
                <ul>
                    @if(LaravelLocalization::getCurrentLocale() == "en")
                        <li><a class="btn btn-outline-success" href="{{ LaravelLocalization::getLocalizedURL('ar')}}">AR</a></li>
                        @else
                        <li><a class="btn btn-outline-success" href="{{ LaravelLocalization::getLocalizedURL('en')}}">EN</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>