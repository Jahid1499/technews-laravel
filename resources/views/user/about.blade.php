@php

use Carbon\Carbon;
date_default_timezone_set("Asia/Dhaka");
$t = Carbon::now();
@endphp

@extends('user.master')

@section('title', 'Post | Tech World')

@section('mainContent')
    <div class="featured_recent_post main_post_gallery" style="margin-top: 0px;">
        <div class="container-md">
            <div class="row">
                <div class="col-md-8">
                    <div class="card p-3" style="margin-bottom: 20px;">
                        {{$about[0]}}
                    </div>
                </div>
                <div class="col-md-4">
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
