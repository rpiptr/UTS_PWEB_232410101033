@extends('layouts.app')
@section('title', 'Profile')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h2 class="text-4xl font-extrabold mb-10 text-gray-900 text-center">My Profile</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">

        <div class="bg-gradient-to-r from-blue-100 to-blue-200 p-6 rounded-xl shadow-lg">
            <h3 class="text-2xl font-bold mb-4 border-b-4 border-blue-500 inline-block pb-1 flex items-center gap-3 text-blue-800">
                Username
            </h3>
            <p class="text-gray-700 text-lg">{{ $username }}</p>
        </div>

        <div class="bg-gradient-to-r from-green-100 to-green-200 p-6 rounded-xl shadow-lg">
            <h3 class="text-2xl font-bold mb-4 border-b-4 border-green-500 inline-block pb-1 flex items-center gap-3 text-green-800">
                Email
            </h3>
            <p class="text-gray-700 text-lg">{{ $email }}</p>
        </div>

        <div class="bg-gradient-to-r from-purple-100 to-purple-200 p-6 rounded-xl shadow-lg">
            <h3 class="text-2xl font-bold mb-4 border-b-4 border-purple-500 inline-block pb-1 flex items-center gap-3 text-purple-800">
                Phone Number
            </h3>
            <p class="text-gray-700 text-lg">{{ $no_hp }}</p>
        </div>

        <div class="bg-gradient-to-r from-yellow-100 to-yellow-200 p-6 rounded-xl shadow-lg">
            <h3 class="text-2xl font-bold mb-4 border-b-4 border-yellow-500 inline-block pb-1 flex items-center gap-3 text-yellow-800">
                Address
            </h3>
            <p class="text-gray-700 text-lg">{{ $alamat }}</p>
        </div>
    </div>
    <div class="flex justify-center mt-6">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="px-8 py-3 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 transition-colors duration-200">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection
