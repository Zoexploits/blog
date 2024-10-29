<x-app-layout>
    

<!--  This will load Tailwind CSS from Laravel's Vite setup -->
<div class="container mx-auto max-w-3xl mt-10">
<!-- <body class="bg-gray-50 flex items-center justify-center min-h-screen"> -->
    <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Create a New Blog Post</h1>

        <!-- Form for uploading the post -->
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="space-y-6">
        @method('PUT')

            @csrf

            <!-- Title Input -->
            <div>
                <label for="title" class="block text-lg font-semibold text-gray-700">Post Title</label>
                <input type="text" id="title" name="title" value="{{ $post->title}}" class="mt-2 w-full px-4 py-3 text-lg border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the title" required>
            </div>

            <!-- Post Content Textarea -->
            <div>
                <label for="content" class="block text-lg font-semibold text-gray-700">Post Content</label>
                <textarea type="text" id="content"  name="content"   rows="12" class="mt-2 w-full px-4 py-3 text-lg border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"  required>{{ $post->content }}</textarea>
            </div>


            <!-- Publish Button -->
            <div class="flex justify-center mt-6">
                <button type="submit" class="px-8 py-3 text-lg font-semibold text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Publish Post</button>
            </div>
        </form>
    </div>
    </div>


    <!-- Footer -->
    <div class="text-center text-gray-500 py-4">
        &copy; {{ date('Y') }} Your Website. All rights reserved.
    </div>
</body>

</x-app-layout>

