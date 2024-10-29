<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
<span class="flex justify-end"> <a class="btn bg-blue-700 rounded-sm p-1 text-white" href="{{route('users.create')}}"> Create New User</a></span>
<table class="table border w-full">
<thead>
    <tr class="border">
        <th class="border">#</th>
        <th class="border">Name</th>
        <th class="border">Phone Number</th>
        <th class="border">Email</th>
        <th class="border">Role</th>
        <th class="border">Actions</th>
    </tr>
</thead>

<tbody>
  @foreach ($users as $key=> $user)
  <tr>
<td class="border">{{$key+1}}</td>
<td class="border">{{$user->name}}</td>
<td class="border">{{$user->phone_number}}</td>
<td class="border">{{$user->email}}</td>
<td class="border">{{$user->role}}</td>
<td class="flex gap-2 border">
<a class="btn bg-green-400 rounded-sm p-1 text-white" href="{{route('users.edit',['id'=>$user->id])}}" >edit</a>
<a class="btn bg-blue-700 rounded-sm p-1 text-white" href="{{route('user.user-view',['id'=>$user->id])}}" >view</a>
<form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
    @csrf
    @method('DELETE') <!-- This ensures the form uses the DELETE method -->
    <button type="submit" class="btn bg-red-700 rounded-sm p-1 text-white hover:bg-red-600 text-white py-2 px-4 rounded-lg">Delete</button>

</td>

</tr>
  @endforeach
</tbody>



</table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
