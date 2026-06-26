<x-layout :title="$title">
  {{-- @dd($posts) // cek data array --}}
  <article class="py-8 max-w-lg"> 
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500">
      By <a href="/authors/{{ $post->author->username }}" class="text-gray-900 hover:underline"> {{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-gray-900 hover:underline">  {{ $post->category->name }}</a> | 19 Mei 2024
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to all posts.</a>
  </article>
</x-layout>