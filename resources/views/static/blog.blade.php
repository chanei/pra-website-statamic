<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philanthropy Reform Alliance</title>
    @vite('resources/css/site.css')
</head>

<body class="min-h-screen flex flex-col bg-[#fdf7f5]">
    <div class="relative px-6 md:px-14 lg:px-20 pt-4 pb-4 bg-black/20">
        {{-- Navbar --}}
        @include('static.navbar')
    </div>

    <div class="flex flex-col items-center text-center gap-4 pt-6 md:pt-14 px-6 md:px-14 lg:px-20 mt-10 mb-20">
        <h1 class="text-4xl font-bold mb-4">Our Blog</h1>
        <p class="text-lg">Insights, stories, and updates from the world of philanthropy reform. Explore our latest articles and thought leadership pieces.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-6 md:px-14 lg:px-20 mb-20">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('assets/landing/blog1.jpg') }}" class="w-full h-48 object-cover" />
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">The Future of Philanthropy: Trends to Watch in 2024</h3>
                <p class="text-gray-700 mb-4">Discover the emerging trends shaping the future of philanthropy, from impact investing to community-led initiatives.</p>
                <a href="{{ url('/blog-item') }}" class="text-orange-500 font-medium hover:underline">Read More</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('assets/landing/blog2.jpg') }}" class="w-full h-48 object-cover" />
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">How Local Leadership is Driving Change in Uganda</h3>
                <p class="text-gray-700 mb-4">Explore inspiring stories of local leaders in Uganda who are transforming their communities through innovative philanthropic approaches.</p>
                <a href="#" class="text-orange-500 font-medium hover:underline">Read More</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('assets/landing/blog2.jpg') }}" class="w-full h-48 object-cover" />
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">How Local Leadership is Driving Change in Uganda</h3>
                <p class="text-gray-700 mb-4">Explore inspiring stories of local leaders in Uganda who are transforming their communities through innovative philanthropic approaches.</p>
                <a href="#" class="text-orange-500 font-medium hover:underline">Read More</a>
            </div>
        </div>
    </div>

    @include('static.footer')
</body>

