<div class="footer-top">
    <div class="container-md">
        <div class="row">
            <div class="col-sm-4">
                <div class="item-one">
                    <h4>TechNews</h4>
                    <span></span>
                    <p>{{Str::limit(strip_tags($about->about_us), 150)}}</p>
                    <a href="#">Read More</a>
                </div>
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item-two">
                    <h4>Popular Tags</h4>
                    <span></span>
                    <div class="tag-list">
                        @foreach($tags as $tag)
                        <a href="#">{{$tag->name}}</a>
                        @endforeach
                        {{--<a href="#">Sports</a>
                        <a href="#">Business</a>
                        <a href="#">Politics</a>
                        <a href="#">Tennis</a>
                        <a href="#">Soccer</a>
                        <a href="#">Usa</a>
                        <a href="#">Cricket</a>
                        <a href="#">Health</a>
                        <a href="#">Nature</a>
                        <a href="#">Videos</a>
                        <a href="#">Asia</a>
                        <a href="#">Bootstrap</a>
                        <a href="#">Nba</a>
                        <a href="#">Africa</a>
                        <a href="#">Newser</a>
                        <a href="#">Flicks</a>--}}
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item-three">
                    <h4>Contact With Us</h4>
                    <span></span>
                    <div class="footer-contact">
                        <ul>
                            <li>
                                <i class="fas fa-phone-alt"></i>{{$about->phone}}
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>{{$about->email}}
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>{{$about->address}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 left">
                <span>&copy; Copyright 2020. All Right Reserved.</span>
            </div>
            <div class="col-sm-6 right">
                <p>Developed By <span>Jahid Hassan</span></p>
            </div>
        </div>
    </div>
</div>
