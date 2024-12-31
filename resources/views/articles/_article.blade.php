<div class="bg-white rounded-lg shadow-md overflow-hidden">
{{--    <img src="https://source.unsplash.com/random/400x200/?nature" alt="Article Image" class="w-full h-48 object-cover">--}}
    <div class="p-6">
        <h2 class="text-xl font-semibold mb-2 hover:text-blue-500 transition duration-300"><a href="{{ route('article.show', $post->slug ) }}">{{ $post->title }}</a></h2>
        <p class="text-gray-600 text-sm mb-4">{{ $post->description }}</p>
        <div class="flex items-center justify-between">
            <span class="text-gray-500 text-xs">Published on {{ $post->published_at->format('M d, Y') }}</span>
            <a href="{{ route('article.show', $post->slug ) }}" class="text-blue-500 hover:underline text-sm">Read More</a>
        </div>
    </div>
</div>
