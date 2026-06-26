<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    // eager loading (untuk mengatasi N+1 dengan relasi one to many) menggunakan with()
    // latest() digunakan untuk mengurutkan data dari terbaru atau descending
    // $posts = Post::with(['category', 'author'])->latest()->get();
    $posts = Post::latest()->get();

    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // lazy eager loading (untuk mengatasi N+1 dengan relasi many to one) mengguanakan load()
    // $posts = $user->posts->load('category', 'author');

    return view('posts', ['title' => count($user->posts) . ' Article by. ' . $user->name, "posts" => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // lazy eager loading (untuk mengatasi N+1 dengan relasi many to one) mengguanakan load()
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => count($category->posts) . ' Category ' . $category->name, "posts" => $category->posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => "Single Post", 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
