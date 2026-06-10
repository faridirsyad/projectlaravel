<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Almaas',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, repellendus rem voluptate numquam, assumenda commodi cumque itaque eius iusto nihil, ullam nemo perspiciatis? Dolorum ab molestias soluta ipsum nulla nisi.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Irsyad',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dicta dolore a est, similique soluta facere doloribus quis laudantium consectetur et eveniet ducimus iusto magni ipsa harum nobis eos quos!'
            ]
        ];
    }

    public static function find($slug)
    {
        // function arrow
        return Arr::first(static::all(), fn($p) => $p['slug'] == $slug) ?? abort(404);
    }
}
