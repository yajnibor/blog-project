@extends('layouts.app')

@include('layouts.nav')

<main class="container mx-auto px-4 py-8 flex-grow">
    <h1 class="text-3xl font-bold mb-6 text-center">Latest Articles</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @each('articles._article', $posts, 'post', 'articles._empty')
    </div>

    <div class="mt-8">
        {{ $posts->links() }}
    </div>
</main>
