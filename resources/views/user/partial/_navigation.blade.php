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
                        <li class="nav-item"><a class="nav-link" href="#">{{$category->name}}</a></li>
                    @endforeach
                    <li class="nav-item"><a class="nav-link" href="#">Log In</a></li>
                    <form class="form-inline" action="#" method="post">
                        <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success d-none" type="submit">i</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</div>
