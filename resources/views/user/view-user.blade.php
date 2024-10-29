<x-app-layout>
<div class="container mx-auto max-w-md mt-10">
  <div class="bg-white shadow-md rounded-lg">
    <div class="bg-gray-200 px-4 py-2 rounded-t-lg font-bold">
      {{ $user->name }}
    </div>
    <div class="p-4">

      <p class="mb-2">
        <span class="font-semibold">Email: </span>{{ $user->email }}
      </p>

      <p class="mb-2">
        <span class="font-semibold">Phone: </span>{{ $user->phone_number }}
      </p>

      <p class="mb-2">
        <span class="font-semibold">Role: </span>{{ $user->role }}
      </p>

    </div>
  </div>

  <div class="mt-4 flex space-x-2">
    <a href="{{ route('dashboard', $user->id) }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg">Back</a>
    <a href="{{ route('users.edit', $user->id) }}" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-lg">Update User Record</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
    @csrf
    @method('DELETE') <!-- This ensures the form uses the DELETE method -->
    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg">Delete</button>
</form>
  </div>
</div>



</x-app-layout>
