<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // dibolehkan mengisi pada tinker
    protected $fillable = ['title', 'author', 'slug', 'body'];
    // dijaga agar tidak mengisi data 
    // protected $guarded = [];
    // protected $table = 'blog_posts'; jika nama table berbeda dengan nama class
}
