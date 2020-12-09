<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Follower;
use App\Models\Image;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $images = Image::where('status','1')->orderBy('id')->get();
        $videos = Video::where('status','1')->orderBy('id')->get();
        $social = Social::first();
        $follower = Follower::first();
        $about = About::first();
        $setting = Setting::first();
        $contact = Contact::first();
        $posts = Post::where('status','1')->orderBy('id','desc')->get();
        $sliders = Slider::where('status','1')->orderBy('id')->get();
        $populars = Post::where('status','1')->orderBy('total_view','asc')->limit(4)->get();
        $randoms = Post::where('status', '1')->inRandomOrder()->limit(4)->get();

        //dd($setting);
        //$tags = Tag::where('status','1')->orderBy('name')->get();
        //$categories = Category::where('status','1')->orderBy('name')->get();
        return view('welcome', compact('images','videos','social','follower','contact', 'posts','sliders','populars','about','setting','randoms'));
    }

    public function post($id)
    {
        $post = Post::findOrFail($id);
        $posts = Post::where('status', '1')
            ->inRandomOrder()
            ->limit(3)
            ->get();
        //return $posts;

        $post->increment('total_view');


        return view('user.post', compact('post','posts'));
    }

    public function posts()
    {
        //return 'hello';
        $posts = Post::where('status','1')->orderBy('id','desc')->get();
        return view('user.posts', compact('posts'));
    }

    public function catposts($id)
    {

        $posts = Post::where('category_id',$id)
            ->where('status','1')
            ->orderBy('id','desc')->get();
        return view('user.catposts', compact('posts'));
    }

    public function tagposts($id)
    {
        $post = Post::where('category_id',$id)
            ->where('status','1')
            ->orderBy('id','desc')->get();
        return view('user.tagposts', compact('post'));
    }

    public function userposts($id)
    {
        $posts = Post::where('user_id',$id)
            ->where('status','1')
            ->orderBy('id','desc')->get();
        return view('user.userposts', compact('posts'));
    }
    public function about()
    {
        $about = About::first()->pluck('about_us');
        $posts = Post::where('status', '1')
            ->inRandomOrder()
            ->limit(3)
            ->get();
        return view('user.about', compact('about','posts'));
    }

}
