<x-app-layout>
<div class="container mx-auto max-w-md mt-10">
  <div class="bg-white shadow-md rounded-lg">
    <div class="bg-gray-200 px-4 py-2 rounded-t-lg font-bold">
      
       {{ $post->title ?? 'Title not available' }} 
    </div>
    <div class="p-4">

      <p class="mb-2">
        <span class="font-semibold">Post: </span>{{ $post->content ?? 'Content not available' }}
      </p>

      <p class="mb-2">
        <span class="font-semibold">Post by: {{ $post->user->name ?? 'Content not available' }}
        </p></span>



    </div>
  </div>

  

  <div class="mt-4 flex space-x-2">
    <a href="{{ route('posts.index')}}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg">Back</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
    @csrf
    @method('DELETE') <!-- This ensures the form uses the DELETE method -->
    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg">Delete</button>
</form>
    <a href="{{route('posts.edit',$post->id)}}" class="bg-green-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg">Edit Post</a>

    
  </div>
</div>


</x-app-layout>
