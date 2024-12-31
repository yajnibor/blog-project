@extends('layouts.app')

@include('layouts.nav')

<main class="container mx-auto px-4 py-8 flex-grow">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-8">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
{{--        <img src="https://source.unsplash.com/random/800x400/?ocean" alt="Article Image" class="w-full mb-6 rounded-lg">--}}
        <p class="text-gray-700 leading-relaxed mb-4">
            {{ $post->description }}
        </p>

        {!! $post->content !!}

        <div class="mt-8 border-t pt-4">
            <p class="text-gray-500 text-sm">Published on {{ $post->published_at->format('M d, Y') }}</p>
        </div>
    </div>
</main>
