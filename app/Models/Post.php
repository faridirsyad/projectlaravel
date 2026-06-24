<?php

namespace App\Models;

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


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
