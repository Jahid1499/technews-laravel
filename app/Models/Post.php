<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    //protected $fillable = ['','',''];

    public function tag()
    {
        return $this->belongsTo('App\Models\Tag');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
