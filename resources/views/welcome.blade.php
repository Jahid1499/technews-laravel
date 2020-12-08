@extends('user.master')

@section('title', 'Welcome | Tech World')

@section('mainContent')
    <!--start marque section-->
    <div class="marque">
        <div class="container-md">
            <h3 class="float-left">Latest News</h3>
            <div id="ticker-slide" class="ticker float-left">
                <ul>
                    @foreach($posts as $post)
                    <li><a href="#">{{$post->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--end marque section-->

    <div class="clearfix"></div>

    <!--start slider and tabs section-->
    <div class="slider_section">
        <div class="container-md pr-0">
            <div class="row">
                <!--start slider section-->
                <div class="col-md-8 slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($sliders as $key=>$slider)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{$key==0 ? 'active':''}}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($sliders as $key=>$slider)
                            <div class="carousel-item {{$key==0 ? 'active':''}}">
                                <img src="{{asset($slider->image)}}" class="d-block w-100" alt="">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--end slider section-->

                <!--start tabs section-->
                <div class="col-md-4 p-0 tab-section">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="nav-home" aria-selected="true">Latest</a>
                            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="nav-profile" aria-selected="false">Popular</a>
                            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#random" role="tab" aria-controls="nav-contact" aria-selected="false">Random</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="nav-home-tab">
                            <ul class="list-news list-news-right">
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/8.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Watch out: That USB stick in your mailbox might be infected</a></h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/9.jpg">
                                        </a>
                                    </div>
                                    <h3>
                                        <a href="#">Netflix Speeds Jumped 51% This Year</a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/11.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Uber wants to build planes to beat city traffic</a></h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/8.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Apple reportedly prototyping their Amazon Echo competitor</a></h3>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <ul class="list-news list-news-right">
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/9.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Watch out: That USB stick in your mailbox might be infected</a></h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/11.jpg">
                                        </a>
                                    </div>
                                    <h3>
                                        <a href="#">Netflix Speeds Jumped 51% This Year</a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/8.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Uber wants to build planes to beat city traffic</a></h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/8.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Apple reportedly prototyping their Amazon Echo competitor</a></h3>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="random" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <ul class="list-news list-news-right">
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/8.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Watch out: That USB stick in your mailbox might be infected</a></h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/9.jpg">
                                        </a>
                                    </div>
                                    <h3>
                                        <a href="#">Netflix Speeds Jumped 51% This Year</a>
                                    </h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/11.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Uber wants to build planes to beat city traffic</a></h3>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img alt="" src="{{asset('assets/user')}}/img/tabs/8.jpg">
                                        </a>
                                    </div>
                                    <h3><a href="#">Apple reportedly prototyping their Amazon Echo competitor</a></h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end tabs section-->
            </div>
        </div>
    </div>
    <!--end slider and tabs section-->

    <div class="clearfix"></div>

    <!--start futured post section-->
    <div class="featured_recent_post">
        <div class="container-md">
            <div class="row">
                <div class="col-md-8">
                    @foreach($posts as $key=>$post)
                        @if($post->is_featured == "1")
                    <div class="row single-featured-post mb-2">
                        <div class="col-sm-6">
                            <div class="img-fluid">
                                <a href="#">
                                    <img class="img-thumbnail" src="{{asset($post->image)}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h3 class="post-title">
                                <a href="#">{{$post->title}}</a>
                            </h3>
                            <div class="post-meta">
                                <span class="post-date">
                                    <i class="far fa-clock"></i>
                                    {{$post->created_at->format("jS F Y")}}
                                </span>
                                <span class="post-author">
                                    <i class="fas fa-user"></i>
                                    <a href="#">
                                        {{$post->user->name}}
                                    </a>
                                </span>
                                <span class="post-date">
                                    <i class="fas fa-eye"></i>
                                    5
                                </span>
                            </div>
                            <div class="post-des">
                                <p>{{Str::limit(strip_tags($post->description), 200)}}</p>
                                <a href="#">Read more....</a></p>
                            </div>
                        </div>
                    </div>
                        @endif
                        @if($key==2)
                            @break
                        @endif
                    @endforeach
                </div>
                <div class="col-md-4 pr-0">
                    <div class="recent_post">
                        <div class="box-caption">
                            <h2><a href="#">Recent Post</a></h2>
                        </div>
                        <div class="box-data" style="padding: 0px 10px;">
                            @foreach($posts as $post)
                            <h4 class="hadding_02 new_border"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <a href="#">{{$post->title}}</a></h4>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end futured post section-->

    <div class="clearfix"></div>

    <!--start main post and photo gallery and video gallery and social media section-->
    <div class="main_post_gallery">
        <div class="container-md">
            <div class="row">
                <!--start main section-->
                <div class="col-md-8">
                    <div class="row">
                        @foreach($posts as $key=>$post)
                        <div class="col-md-6 pb-3">
                            <div class="card">
                                <img src="{{asset($post->image)}}" class="card-img-top img-responsive" style="height: 10%" alt="...">
                                <div class="card-body">
                                    <button class="tag-name">{{$post->tag->name}}</button>
                                    <h3 class="post-title">
                                        <a href="#">{{$post->title}}</a>
                                    </h3>
                                    <div class="post-meta">
                                    <span class="post-date">
                                        <i class="far fa-clock"></i>
                                        {{$post->created_at->format("jS F Y")}}
                                    </span>
                                        <span class="post-author">
                                        <i class="fas fa-user"></i>
                                        <a href="#">
                                            {{$post->user->name}}
                                        </a>
                                    </span>
                                        <span class="post-date">
                                        <i class="fas fa-eye"></i>
                                        {{$post->total_view}}
                                    </span>
                                    </div>
                                    <p class="card-text">{{Str::limit(strip_tags($post->description), 200)}}</p>
                                    <button class="button-two"><a href="#">Read More</a></button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="show-all-post w-100">
                            <a href="#">Show all post</a>
                        </div>
                    </div>
                </div>
                <!--end main post section-->

                <div class="col-md-4 pr-0">
                    <!--start photo gallery section-->
                    <div class="recent_post">
                        <div class="box-caption">
                            <h2><a href="#">Photo Gallery</a></h2>
                        </div>
                        <div class="box-data photo-gallery">
                            @foreach($images as $image)
                            <div class="box-data-item py-3">
                                <a class="example-image-link" href="{{asset($image->small_image)}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                    <img class="example-image" src="{{asset($image->image)}}" alt=""/>
                                </a>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                            <div class="button photo-gallery-button my-3">
                                <a href="#">Show all</a>
                            </div>
                        </div>
                    </div>
                    <!--end photo gallery section-->

                    <!--start video gallery section-->
                    <div class="recent_post mt-3">
                        <div class="box-caption">
                            <h2><a href="#">Video Gallery</a></h2>
                        </div>
                        <div class="box-data video-gallery">
                            <div class="row text-center m-0">
                                @foreach($videos as $video)
                                <div class="box-data-item py-3">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#{{$video->id}}">
                                        <img src="{{asset($video->image)}}" alt="">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="button video-gallery-button">
                                <a href="#">Show all</a>
                            </div>
                        </div>
                    </div>
                    <!--end video gallery section-->
                    <!--start social media section-->
                    <div class="recent_post mt-3">
                        <div class="box-caption">
                            <h2><a href="#">Social Media</a></h2>
                        </div>
                        <div class="box-social">
                            <div class="social-network">
                                <div class="sn-row">
                                    <div class="sn-col">
                                        <div class="sn-item">
                                            <div class="sn-icon">
                                                <i class="fab fa-facebook-f"></i>
                                            </div>
                                            <p>{{$follower->facebook}}K</p>
                                            <span>FANS</span>
                                        </div>
                                    </div>
                                    <div class="sn-col">
                                        <div class="sn-item twitter">
                                            <div class="sn-icon">
                                                <i class="fab fa-twitter"></i>
                                            </div>
                                            <p>{{$follower->twitter}}K</p>
                                            <span>FOLLOWERS</span>
                                        </div>
                                    </div>
                                    <div class="sn-col">
                                        <div class="sn-item pinterest">
                                            <div class="sn-icon">
                                                <i class="fab fa-pinterest-p"></i>
                                            </div>
                                            <p>{{$follower->pinterest}}K</p>
                                            <span>PIN IT</span>
                                        </div>
                                    </div>
                                    <div class="sn-col">
                                        <div class="sn-item youtube">
                                            <div class="sn-icon">
                                                <i class="fab fa-youtube"></i>
                                            </div>
                                            <p>{{$follower->youtube}}K</p>
                                            <span>SUBSCRIBE</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!--end social media section-->

                    <!--start facebook page section-->
                    <div class="recent_post mt-3">
                        <div class="box-caption">
                            <h2><a href="#">Facebook Page</a></h2>
                        </div>
                        <div class="box-data facebook_page">
                            <div class="row text-center m-0">
                                <!--height =490 width=500-->
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="370" height="490" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                    </div>
                    <!--end facebook page section-->
                </div>
            </div>
        </div>
    </div>
    <!--start main post and photo gallery and video gallery and social media section-->

    <div class="clearfix"></div>

    <div class="main_post_gallery">
        <div class="container-md">
            <!--start marque section-->
            <div class="row">
                <div class="marque">
                    <div class="container-md">
                        <h3 class="float-left">Recent Post</h3>
                    </div>
                </div>
                <div class="line"></div>
            </div>
            <!--end marque section-->
            <div class="row">
                @foreach($posts as $key=>$post)
                <div class="col-md-3 pb-3">
                    <div class="card">
                        <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <button class="tag-name">{{$post->tag->name}}</button>
                            <h3 class="post-title">
                                <a href="#">{{$post->title}}</a>
                            </h3>
                            <div class="post-meta">
                                    <span class="post-date">
                                        <i class="far fa-clock"></i>
                                        {{$post->created_at->format("jS F Y")}}
                                    </span>
                                <span class="post-author">
                                        <i class="fas fa-user"></i>
                                        <a href="#">
                                           {{$post->user_id}}
                                        </a>
                                    </span>
                                <span class="post-date">
                                        <i class="fas fa-eye"></i>
                                        {{$post->total_view}}
                                    </span>
                            </div>
                            <button class="button-two"><a href="#">Read More</a></button>
                        </div>
                    </div>
                </div>
                    @break($key==3)
                @endforeach
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!--Start notice board section-->
    <div class="notice_board_about">
        <div class="container-md">
            <div class="row">
                <div class="col-md-8">
                    <div class="recent_post mt-3">
                        <div class="box-caption">
                            <h2><a href="#">Popular Post</a></h2>
                        </div>
                        <div class="notice_board">
                            <ul>
                                @foreach($posts as $key=>$post)
                                <li><a href="#"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>{{$post->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <button class="button-two"><a href="#">Show All</a></button>
                        </div>
                    </div>
                </div>
                <!--start about us section-->
                <div class="col-md-4">
                    <div class="recent_post mt-3">
                        <div class="box-caption">
                            <h2><a href="#">About Us</a></h2>
                        </div>
                        <div class="about_us">
                            <div class="sn-row">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur assumenda,
                                    corporis cupiditate debitis dolore eaque eius, fugit ipsa ipsam iusto nihil pariatur
                                    quis recusandae, sequi sit vel voluptate voluptates Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Atque consectetur fugiat illo ipsa iusto libero molestias necessitatibus
                                    nesciunt odio odit officiis quam quidem quisquam, quod ratione reiciendis sequi, tempore voluptatum! .....</p>
                                <a href="#">Read more</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!--end about us section-->
            </div>
        </div>
    </div>
    <!--end notice board section-->

    <div class="clearfix"></div>

    <!--start google map and contact section-->
    <div class="google_map_contact">
        <div class="container-md">
            <div class="row">
                <div class="col-sm-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.700312013923!2d90.34508223190667!3d23.794582085659727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e96fce29dd%3A0x6ccd9e51aba9e64d!2sMirpur-1%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1604946779892!5m2!1sen!2sbd"
                            width="100%" height="445" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-sm-5">
                    <div class="recent_post">
                        <div class="box-caption">
                            <h2><a href="#">Contact With us</a></h2>
                        </div>
                        <div class="contact_with_us">
                            <form action="#" method="#">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Ex. Jahid Hassan" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Name</label>
                                    <input type="email" name="email" placeholder="Ex. name@gmail.com" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="message">Write Your Message</label>
                                    <textarea class="form-control" id="message" rows="4"></textarea>
                                </div>
                                <div class="form-group pt-2">
                                    <input type="button" class="btn btn-block sub_button" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end google map and contact section-->
@endsection
