<nav class="bg-gray-800 text-white p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-xl font-bold">{{ config('app.name') }}</a>
        @if ($hasBackButton)
            <a href="{{ route('home') }}" class="dark:text-white-500 hover:underline">Back to Articles</a>
        @endif
    </div>
</nav>
