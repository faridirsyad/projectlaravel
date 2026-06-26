<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    // dibolehkan mengisi pada tinker
    protected $fillable = ['title', 'author', 'slug', 'body'];
    // dijaga agar tidak mengisi data 
    // protected $guarded = [];
    // protected $table = 'blog_posts'; jika nama table berbeda dengan nama class

    //eager loading laravel (untuk mengatasi N+1)
    protected $with = ['author', 'category'];


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
