<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}"><i class="fas fa-home"></i></a>
                    </li>
                    @foreach($categories as $category)
                        <li class="nav-item {{Request::is("post/category/{$category->id}") ? 'active': ''}}"><a class="nav-link" href="{{route('categorypost', $category->id)}}">{{$category->name}}</a></li>
                    @endforeach

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <form class="form-inline" action="{{route('search')}}" method="post">
                        @csrf
                        <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success d-none" type="submit">i</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</div>
