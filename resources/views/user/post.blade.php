@php

use Carbon\Carbon;
date_default_timezone_set("Asia/Dhaka");
$t = Carbon::now();
$p_id = null;
@endphp

@extends('user.master')

@section('title', 'Post | Tech World')

@section('mainContent')
    <div class="featured_recent_post main_post_gallery" style="margin-top: 0px;">
        <div class="container-md">
            <div class="row">
                <div class="col-md-9">

                    @if(session()->has('comment'))
                        <div class="alert alert-success mb-3" role="alert">
                            {{session('comment')}}
                        </div>
                    @endif

                    <div class="card" style="margin-bottom: 20px;">
                        @php
                        $p_id = $post->id;
                        @endphp
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
                            <p class="card-text">{{strip_tags($post->description)}}</p>
                        </div>
                    </div>
                    <div class="card p-3" style="margin-bottom: 20px;">
                        <h6 class="text-uppercase">Comment</h6>
                        @if($comments->count() > 0)
                            @foreach($comments as $key=>$post)
                            <div>
                                <p class="mb-0">{{$key+1}}. {{$post->comment}}</p>
                                <div class="post-meta mt-0 ml-2">
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
                                </div>
                            </div>
                            @endforeach
                        @else
                            <p>No comment in this post</p>
                        @endif
                        <div class="mt-2">
                            <form action="{{route('getcomment')}}" method="post">
                                @csrf
                                <input type="hidden" name="post_id" value="{{$p_id}}">
                                <textarea name="comment" id="" cols="100" rows="5"></textarea>
                                <br>
                                <button class="btn btn-success" type="submit">Sbumit</button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        {{--{{dd($posts[0]->tag->name)}}--}}
                        @foreach($posts as $key=>$post)
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
    </div>
@endsection
