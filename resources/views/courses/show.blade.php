@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-full h-64 object-cover">
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $course->title }}</h1>
            <p class="text-gray-600 mb-6">{{ $course->description }}</p>
            <div class="flex items-center mb-4">
                <span class="text-gray-700 font-semibold mr-2">Instructor:</span>
                <span>{{ $course->instructor }}</span>
            </div>
            <div class="flex items-center mb-6">
                <span class="text-gray-700 font-semibold mr-2">Duration:</span>
                <span>{{ $course->duration }} hours</span>
            </div>
            <a href="#" class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600">Enroll Now</a>
        </div>
    </div>
</div>
@endsection
