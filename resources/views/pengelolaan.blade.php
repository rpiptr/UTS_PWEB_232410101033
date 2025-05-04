{{-- @extends('layouts.app')
@section('title', 'Pengelolaan')

@section('content')
    <div>
        <h2>Daftar Buku</h2>

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buku as $item)
                    <tr>
                        <td>{{ $item['judul'] }}</td>
                        <td>{{ $item['penulis'] }}</td>
                        <td>{{ $item['genre'] }}</td>
                        <td>{{ $item['tahun'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}

@extends('layouts.app')
@section('title', 'Pengelolaan')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4 text-center">Book List</h2>

        <table class="min-w-full border border-gray-300">
            <thead class="bg-blue-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Title</th>
                    <th class="border border-gray-300 px-4 py-2">Author</th>
                    <th class="border border-gray-300 px-4 py-2">Genre</th>
                    <th class="border border-gray-300 px-4 py-2">Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buku as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{ $item['judul'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $item['penulis'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $item['genre'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $item['tahun'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection