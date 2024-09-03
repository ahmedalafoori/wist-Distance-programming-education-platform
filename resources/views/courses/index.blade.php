@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">Explore Our Courses</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($courses as $course)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="{{ $course->image_url ?? 'https://via.placeholder.com/300x200' }}" alt="{{ $course->title }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold mb-2 text-gray-800">{{ $course->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ Str::limit($course->description, 100) }}</p>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-clock mr-1"></i> {{ $course->duration }} hours
                        </span>
                        <span class="text-sm text-gray-500">
                            <i class="fas fa-user mr-1"></i> {{ $course->instructor }}
                        </span>
                    </div>
                    <a href="{{ route('courses.show', $course) }}" class="block w-full text-center bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">View Course</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-12">
            {{ $courses->links() }}
        </div>
    </div>
</div>
@endsection
