<!-- extends('layouts.app') -->
<x-app-layout>


<div class="container max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-10">Blog Posts</h1>
    
    <!-- Grid layout for blog post cards -->
    <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Example Blog Post Card -->
        @foreach ($posts as $post)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Card Content -->
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-2">{{ $post->title }}</h2>
                    @if($post->image)
                        <img src="{{ asset('images/' . $post->image) }}" alt="Post Image" class="w-full h-auto object-cover"> <!-- Display image -->
                    @endif
                <p>{{ $post->excerpt ?: $post->getExcerpt() }}</p>
                <p class="mb-2">
                    <span class="text-gray-600">{{ $post->updated_at->diffForHumans() }}</span>
                </p>
        <span class="font-semibold">Post by: {{ $post->user->name ?? 'Content not available' }}
        </p></span>
                

                <!-- Read More Button -->
                <a href="{{ route('posts.show', $post->id) }}" class="inline-block text-blue-500 font-semibold hover:underline">Read More &rarr;</a>
            </div>
        </div>
        @endforeach
    </div>
</div>




</x-app-layout>

<!-- endsection -->
