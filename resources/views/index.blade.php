@extends('layouts.app')

@section('content')

<div class="flex flex-wrap">
@foreach ($pictures as $picture)
    <div class="w-4/12 lg:w-3/12 p-2">
        <div class="rounded overflow-hidden bg-white border border-gray-200 p-4">
            <img class="w-full h-full" width="400px" src="{{ asset('storage/' . $picture->file_path) }}">
            <p class="mt-2 text-gray-500">{{ $picture->name }}</p>
            <p class="mt-2 text-gray-500">{{ $picture->votes }} votes</p>
        </div>
    </div>
@endforeach
</div>

@endsection