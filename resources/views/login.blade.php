<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login | Litera</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-blue-300 to-white">
    <h1 class="text-4xl font-extrabold mb-8 text-center text-blue-900">Welcome to Litera</h1>
    <div class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
        <form method="POST" action="{{ route('submit') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Username:</label>
                <input type="text" name="username" value="{{ old('username') }}" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-300" required/>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password:</label>
                <input type="password"
                name="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-300" required/>
            </div>
            @if($errors->any())
                <p class="text-red-500 mb-4">{{ $errors->first() }}</p>
            @endif
            <button type="submit"class="w-full bg-blue-600 text-white font-bold py-2 rounded-md hover:bg-blue-700 transition duration-200">
                Login
            </button>
        </form>
    </div>
</body>
</html>
