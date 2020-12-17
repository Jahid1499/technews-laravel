@php
    use Brian2694\Toastr\Facades\Toastr;
@endphp
@extends('user.master')

@section('title', 'Welcome | Tech World')

@section('mainContent')


    @if(session()->has('contact'))
        <div class="container-md mt-3">
            <div class="alert alert-success" role="alert">
                {{session('contact')}}
            </div>
        </div>
    @endif

    <!--start marque section-->
    <div class="marque">
        <div class="container-md">
            <h3 class="float-left">Latest News</h3>
            <div id="ticker-slide" class="ticker float-left">
                <ul>
                    @foreach($posts as $key=>$post)
                    <li><a href="{{route('post', $post->id)}}">{{$post->title}}</a></li>
                        @break($key==5)
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

                <div class="clearfix"></div>

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
                                @foreach($posts as $key=>$post)
                                <li>
                                    <div class="post-thumb img-responsive">
                                        <a href="{{route('post',$post->id)}}">
                                            <img class="img-fluid" alt="{{$post->title}}" src="{{asset($post->image)}}">
                                        </a>
                                    </div>
                                    <h3><a href="{{route('post',$post->id)}}">{{$post->title}}</a></h3>
                                </li>
                                    @break($key == 3)
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <ul class="list-news list-news-right">
                                @foreach($populars as $post)
                                    <li>
                                        <div class="post-thumb img-responsive">
                                            <a href="{{route('post',$post->id)}}">
                                                <img class="img-fluid" alt="{{$post->title}}" src="{{asset($post->image)}}">
                                            </a>
                                        </div>
                                        <h3><a href="{{route('post',$post->id)}}">{{$post->title}}</a></h3>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="random" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <ul class="list-news list-news-right">
                                @foreach($randoms as $post)
                                    <li>
                                        <div class="post-thumb img-responsive">
                                            <a href="{{route('post',$post->id)}}">
                                                <img class="img-fluid" alt="{{$post->title}}" src="{{asset($post->image)}}">
                                            </a>
                                        </div>
                                        <h3><a href="{{route('post',$post->id)}}">{{$post->title}}</a></h3>
                                    </li>
                                @endforeach
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
                                <a href="{{route('post', $post->id)}}">
                                    <img class="img-thumbnail" src="{{asset($post->image)}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h3 class="post-title">
                                <a href="{{route('post', $post->id)}}">{{$post->title}}</a>
                            </h3>
                            <div class="post-meta">
                                <span class="post-date">
                                    <i class="far fa-clock"></i>
                                    {{$post->created_at->format("jS F Y")}}
                                </span>
                                <span class="post-author">
                                    <i class="fas fa-user"></i>
                                    <a href="{{route('userpost', $post->user_id)}}">
                                        {{$post->user->name}}
                                    </a>
                                </span>
                                <span class="post-date">
                                    <i class="fas fa-eye"></i>
                                    {{$post->total_view}}
                                </span>
                            </div>
                            <div class="post-des">
                                <p>{{Str::limit(strip_tags($post->description), 200)}}</p>
                                <a href="{{route('post', $post->id)}}">Read more....</a>
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
                            <h4 class="hadding_02 new_border"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <a href="{{route('post', $post->id)}}">{{$post->title}}</a></h4>
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
                                        <a href="{{route('post', $post->id)}}">{{$post->title}}</a>
                                    </h3>
                                    <div class="post-meta">
                                    <span class="post-date">
                                        <i class="far fa-clock"></i>
                                        {{$post->created_at->format("jS F Y")}}
                                    </span>
                                        <span class="post-author">
                                        <i class="fas fa-user"></i>
                                        <a href="{{route('userpost', $post->user_id)}}">
                                            {{$post->user->name}}
                                        </a>
                                    </span>
                                        <span class="post-date">
                                        <i class="fas fa-eye"></i>
                                        {{$post->total_view}}
                                    </span>
                                    </div>
                                    <p class="card-text">{{Str::limit(strip_tags($post->description), 200)}}</p>
                                    <button class="button-two"><a href="{{route('post', $post->id)}}">Read More</a></button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="show-all-post w-100">
                            <a href="{{route('allpost')}}">Show all post</a>
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
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#{{$video->link_id}}">
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
                                                <i style="padding-top: 13px;" class="fab fa-facebook-f"></i>
                                            </div>
                                            <p>{{$follower->facebook}}K</p>
                                            <span>FANS</span>
                                        </div>
                                    </div>
                                    <div class="sn-col">
                                        <div class="sn-item twitter">
                                            <div class="sn-icon">
                                                <i style="padding-top: 13px;" class="fab fa-twitter"></i>
                                            </div>
                                            <p>{{$follower->twitter}}K</p>
                                            <span>FOLLOWERS</span>
                                        </div>
                                    </div>
                                    <div class="sn-col">
                                        <div class="sn-item pinterest">
                                            <div class="sn-icon">
                                                <i style="padding-top: 13px;" class="fab fa-pinterest-p"></i>
                                            </div>
                                            <p>{{$follower->pinterest}}K</p>
                                            <span>PIN IT</span>
                                        </div>
                                    </div>
                                    <div class="sn-col">
                                        <div class="sn-item youtube">
                                            <div class="sn-icon">
                                                <i style="padding-top: 13px;" class="fab fa-youtube"></i>
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
                                <iframe src="{{$setting->facebook_page}}" width="370" height="490" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
                @foreach($populars as $key=>$post)
                <div class="col-md-3 pb-3">
                    <div class="card">
                        <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <button class="tag-name">{{$post->tag->name}}</button>
                            <h3 class="post-title">
                                <a href="{{route('post', $post->id)}}">{{$post->title}}</a>
                            </h3>
                            <div class="post-meta">
                                    <span class="post-date">
                                        <i class="far fa-clock"></i>
                                        {{$post->created_at->format("jS F Y")}}
                                    </span>
                                <span class="post-author">
                                        <i class="fas fa-user"></i>
                                        <a href="{{route('userpost', $post->user_id)}}">
                                           {{$post->user->name}}
                                        </a>
                                    </span>
                                <span class="post-date">
                                        <i class="fas fa-eye"></i>
                                        {{$post->total_view}}
                                    </span>
                            </div>
                            <button class="button-two"><a href="{{route('post', $post->id)}}">Read More</a></button>
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
                                <li><a href="{{route('post', $post->id)}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>{{$post->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <button class="button-two"><a href="{{route('allpost')}}">Show All</a></button>
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
                                <p>{{Str::limit(strip_tags($about->about_us), 200)}}</p>
                                <a href="{{route('about')}}">Read more</a>
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
                    <iframe src="{{$setting->google_map}}"
                            width="100%" height="445" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-sm-5">
                    <div class="recent_post">
                        <div class="box-caption">
                            <h2><a href="#">Contact With us</a></h2>
                        </div>
                        <div class="contact_with_us">

                            <form action="{{route('contact')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Ex. Jahid Hassan" class="form-control @error('name') is-invalid @enderror" id="name">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="email">Name</label>
                                    <input type="email" name="email" placeholder="Ex. name@gmail.com" class="form-control @error('email') is-invalid @enderror" id="email">
                                </div>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="message">Write Your Message</label>
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" rows="4"></textarea>
                                </div>
                                @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group pt-2">
                                    <input type="submit" class="btn btn-block sub_button" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end google map and contact section-->

    <!--start model section-->
    @foreach($videos as $video)
        <div class="modal fade" id="{{$video->link_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$video->video_title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" height="400px" src="{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!--end model section-->
@endsection

@push('js')

    <script src="{{asset('assets/admin/js/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}

    <script type="text/javascript">
        @if($errors->any())
            @foreach($errors->all() as $error)
            toastr.error('{{$error}}','Error', {closeButton:true, progressBar:true})
            @endforeach
        @endif
    </script>

@endpush


