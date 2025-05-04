<nav class="bg-blue-600 text-white shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <h1 class="text-3xl font-bold tracking-tight">Litera</h1>
        <ul class="flex space-x-6 text-lg font-medium">
            <li><a href="{{ route('dashboard', ['username' => $username]) }}" class="hover:text-gray-300 transition-colors duration-200">Dashboard</a></li>
            <li><a href="{{ route('pengelolaan', ['username' => $username]) }}" class="hover:text-gray-300 transition-colors duration-200">Manage</a></li>
            <li><a href="{{ route('profile', ['username' => $username]) }}" class="hover:text-gray-300 transition-colors duration-200">Profile</a></li>
        </ul>
    </div>
</nav>