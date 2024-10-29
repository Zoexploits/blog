<x-app-layout>



<form method="post" action="{{route('users.store')}}">
    @csrf
       

    @include('user.form')
    
    <button class="border" type="submit">Sign up</button>
      
    </form>

</x-app-layout>
