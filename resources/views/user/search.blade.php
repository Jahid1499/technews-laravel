@php
    use Carbon\Carbon;
    date_default_timezone_set("Asia/Dhaka");
    $t = Carbon::now();
@endphp

@extends('user.master')

@section('title', 'Posts | Search | Tech World')

@section('mainContent')
    <div class="featured_recent_post main_post_gallery" style="margin-top: 0px;">
        <div class="container-md">
            @if(session()->has('search'))
                <div class="alert alert-success" role="alert">
                    {{session('search')}}{{$posts->count()}} Iteam found
                </div>
            @endif
            <div class="row">
                <div class="col-md-9">
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
                                        {{ Carbon::parse($post->created_at)->format("jS F Y")}}
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
                </div>
                <div class="col-md-3">
                    @foreach($randomposts as $key=>$post)
                        <div class="card mb-2">
                            <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <button class="tag-name">{{$post->tag->name}}</button>
                                <h3 class="post-title">
                                    <a href="{{route('post', $post->id)}}">{{$post->title}}</a>
                                </h3>
                                <div class="post-meta">
                            <span class="post-date">
                                <i class="far fa-clock"></i>
                                {{ Carbon::parse($post->created_at)->format("jS F Y")}}
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

