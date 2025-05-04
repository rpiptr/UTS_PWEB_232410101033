@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Welcome to your Dashboard, {{ $username }}!</h1>
    <p class="text-gray-600 mb-8">Here, you can manage your books and view your profile information.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-700">Profile Overview</h2>
            <p class="text-gray-600">Name: {{ $username }}</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-700">Account Settings</h2>
            <p class="text-gray-600">Your account settings can be managed in the settings section.</p>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2 text-gray-700">Recent Activity</h2>
            <p class="text-gray-600">Check back here for updates on your recent activities.</p>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4 text-gray-700">Notifications</h2>
        <ul class="list-disc pl-5 space-y-2 text-gray-700">
            <li>You have 3 unread messages.</li>
            <li>Your password will expire in 10 days.</li>
            <li>New features added recently! Check your email for details.</li>
        </ul>
    </div>
</div>
@endsection
