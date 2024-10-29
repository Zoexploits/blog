

<div class="container mx-auto p-6 bg-gray-50">
    <div class="grid grid-cols-1 gap-6 max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">

        <!-- Name Field -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input type="text" name="name" value="{{ $user->name ?? '' }}" class="border border-gray-300 rounded-lg w-full px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter name">
        </div>

        <!-- Role Field -->
        <div>
            <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role</label>
            <input type="text" name="role" value="{{ $user->role ?? '' }}" class="border border-gray-300 rounded-lg w-full px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter role">
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" value="{{ $user->email ?? '' }}" class="border border-gray-300 rounded-lg w-full px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter email">
        </div>

        <!-- Phone Number Field -->
        <div>
            <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" name="phone_number" value="{{ $user->phone_number ?? '' }}" class="border border-gray-300 rounded-lg w-full px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter phone number">
        </div>

        <!-- Password Field -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" name="password" value="{{ $user->password ?? '' }}" class="border border-gray-300 rounded-lg w-full px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter password">
        </div>
        
        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="px-6 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
        </div>
    </div>
</div>


