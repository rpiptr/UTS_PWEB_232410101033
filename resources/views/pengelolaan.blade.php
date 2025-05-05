@extends('layouts.app')
@section('title', 'Pengelolaan')

@section('content')
<div class="container mx-auto px-4 py-6 max-w-4xl">
    <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">Book List</h2>

    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300 bg-white shadow-lg rounded-lg table-auto mx-auto">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 w-48 text-left">Title</th>
                    <th class="border border-gray-300 px-4 py-2 w-32 text-left">Author</th>
                    <th class="border border-gray-300 px-4 py-2 w-32 text-left">Genre</th>
                    <th class="border border-gray-300 px-4 py-2 w-20 text-left">Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buku as $item)
                    <tr class="hover:bg-blue-100 transition duration-200">
                        <td class="border border-gray-300 px-4 py-2 max-w-xs truncate">{{ $item['judul'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $item['penulis'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $item['genre'] }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $item['tahun'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection