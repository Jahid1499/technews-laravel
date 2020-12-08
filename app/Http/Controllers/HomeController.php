<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Follower;
use App\Models\Image;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $images = Image::where('status','1')->orderBy('id')->get();
        $videos = Video::where('status','1')->orderBy('id')->get();
        $social = Social::first();
        $follower = Follower::first();
        //$about = About::first();
        $contact = Contact::first();
        $posts = Post::where('status','1')->orderBy('id','desc')->get();
        $sliders = Slider::where('status','1')->orderBy('id')->get();
        //$tags = Tag::where('status','1')->orderBy('name')->get();
        //$categories = Category::where('status','1')->orderBy('name')->get();
        return view('welcome', compact('images','videos','social','follower','contact', 'posts','sliders'));
    }
}
