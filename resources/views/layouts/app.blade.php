<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Distance Learning Platform')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">LearnPro</a>
            <div>
                @guest
                    <a href="{{ route('login') }}" class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-400">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 rounded bg-green-500 hover:bg-green-400 ml-2">Sign Up</a>
                @else
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded bg-red-500 hover:bg-red-400">Logout</button>
                    </form>
                @endguest
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-lg font-semibold mb-2">About Us</h3>
                    <p class="text-gray-400">We provide high-quality online courses for programming enthusiasts.</p>
                </div>
                <div class="w-full md:w-1/4 mb-6 md:mb-0">
                    <h3 class="text-lg font-semibold mb-2">Quick Links</h3>
                    <ul class="text-gray-400">
                        <li><a href="#" class="hover:text-white">Courses</a></li>
                        <li><a href="#" class="hover:text-white">Instructors</a></li>
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4">
                    <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
                    <p class="text-gray-400">Email: info@learnpro.com</p>
                    <p class="text-gray-400">Phone: +1 234 567 8900</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-sm text-gray-400 text-center">
                © 2023 LearnPro. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
