<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philanthropy Reform Alliance</title>
    @vite('resources/css/site.css')
</head>

<body class="min-h-screen flex flex-col bg-[#fdf7f5]">
    {{-- Hero Section --}}
    <div class="relative bg-cover bg-center min-h-screen px-6 md:px-14 lg:px-20 pt-4 pb-4"
        style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('assets/landing/hero.jpg') }}')">
        {{-- Navbar --}}
        @include('static.navbar')

        <div class="relative mt-10 pt-14">
            <div class="flex flex-col items-center text-center gap-4 pt-6 md:pt-14">
                <h1 class="text-white text-4xl font-bold mb-4">Changing Lives for Lasting Impact</h1>
                <h3 class="text-white text-xl font-light max-w-2xl">We bring together innovators, funders and
                    communities to reshape how philanthropy works</h3>
            </div>
            <div class="flex flex-col md:flex-row justify-center mt-6 md:mt-16 gap-4">
                <button class="button rounded-full bg-orange-500 px-8 py-4 transition-all duration-200">
                    <a href="#" class="text-white text-sm md:text-md font-medium">Become a Member</a>
                </button>
                <button
                    class="rounded-full bg-white/20 border border-white/40 px-8 py-4 backdrop-blur-sm hover:bg-white/30 transition-all duration-200">
                    <a href="#" class="text-white text-sm md:text-md font-medium">Explore Our Programs</a>
                </button>
            </div>
        </div>
    </div>

    {{-- Story info --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 md:px-14 lg:px-20 mt-30 mb-20">
        <div class="mt-30">
            <h3 class="text-3xl font-bold mb-2">Philanthropy Reform Alliance</h3>
            <p class="mb-8 font-light">
                Philanthropy Reform Alliance was founded on a simple belief: meaningful change happens when resources,
                ideas, and communities work together differently. </p>
            <p class="mb-8 font-light">
                Traditional philanthropy models often exclude the very communities they aim to serve. We exist to
                challenge that status quo by fostering collaboration, supporting bold ideas, and building platforms
                where local leadership drives sustainable impact.
            </p>
            <p class="mb-8 font-light">
                Through fellowship programs, catalytic funding, and collaborative roundtables, we empower changemakers
                to design solutions that respond to real community needs.
            </p>
        </div>
        <div class="max-h-[600px] items-end">
            <div class="flex-1 relative h-auto md:h-[600px]">
                <img src="{{ asset('assets/landing/story.jpeg') }}" class="rounded-2xl w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/50 rounded-2xl"></div>
            </div>
        </div>
    </div>

    <div class="flex flex-col px-6 md:px-14 lg:px-20 py-24">
        <h1 class="text-3xl text-center font-bold mb-16">Our Core Values</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-between">
            <div class="flex-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-6">
                <div class="flex items-center justify-center bg-orange-300 h-20 w-20 rounded-full mb-6">
                    <img src="{{ asset('assets/landing/collaboration.png') }}" class="h-8" />
                </div>
                <h1 class="text-md font-bold mb-4">Collaboration</h1>
                <p class="text-center font-light">Together we create lasting change and hope</p>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-6">
                <div class="flex items-center justify-center bg-orange-300 h-20 w-20 rounded-full mb-6">
                    <img src="{{ asset('assets/landing/equity.png') }}" class="h-6" />
                </div>
                <h1 class="text-md font-bold mb-4">Equity</h1>
                <p class="text-center font-light">We believe in a just and inclusive world where everyone has the
                    opportunity to thrive</p>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-6">
                <div class="flex items-center justify-center bg-orange-300 h-20 w-20 rounded-full mb-6">
                    <img src="{{ asset('assets/landing/innovation.png') }}" class="h-6" />
                </div>
                <h1 class="text-md font-bold mb-4">Innovation</h1>
                <p class="text-center font-light">We embrace creativity and bold ideas to drive transformative change
                </p>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center bg-white shadow-lg rounded-2xl p-6">
                <div class="flex items-center justify-center bg-orange-300 h-20 w-20 rounded-full mb-6">
                    <img src="{{ asset('assets/landing/accountability.png') }}" class="h-6" />
                </div>
                <h1 class="text-md font-bold mb-4">Accountability</h1>
                <p class="text-center font-light">We are committed to transparency, learning, and continuous improvement
                    in all we do</p>
            </div>
        </div>
        <div class="flex justify-center mt-16 mx-auto bg-white shadow-lg rounded-2xl p-8 md:p-14">
            <h2 class="text-xl md:text-2xl text-center">
                "The smallest act of love can change the biggest story."
            </h2>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-12 px-6 md:px-14 lg:px-20 pt-20 mb-20">
        <div class="flex w-full md:w-[45%] max-h-[600px]">
            <div class="w-full h-[600px] relative rounded-xl overflow-hidden">
                <img src="{{ asset('assets/landing/story.jpeg') }}" class="w-full h-full object-center" />
                <div class="absolute inset-0 bg-black/40 rounded-2xl"></div>
            </div>
        </div>
        <div class="w-full md:w-[55%]">
            <h3 class="font-bold text-xl md:text-3xl mb-6">Our Programs</h3>
            <p class="font-light mb-6">
                Our work bridges philanthropy, innovation, and social impact — creating ecosystems where generosity
                leads to measurable transformation
            </p>
            <div class="flex gap-4 mb-8">
                <div class="flex">
                    <div class="flex items-center justify-center bg-orange-300 text-white h-12 w-12 rounded-full">01
                    </div>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold">Fellowship Program</h6>
                    <p class="font-light">
                        A leadership development initiative supporting emerging changemakers working at the intersection
                        of philanthropy, policy, and community development.
                    </p>
                    <button class="w-fit text-left bg-orange-400 text-white mt-2 px-6 py-2 rounded-full">
                        <a href="#">Learn more</a>
                    </button>
                </div>
            </div>
            <div class="flex gap-4 mb-8">
                <div class="flex">
                    <div class="flex items-center justify-center bg-orange-300 text-white h-12 w-12 rounded-full">02
                    </div>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold">Catalytic Seed Fund</h6>
                    <p class="font-light">
                        We provide early-stage funding to innovative ideas that have strong potential for community
                        transformation but limited access to traditional funding.
                    </p>
                    <button class="w-fit text-left bg-orange-400 text-white mt-2 px-6 py-2 rounded-full">
                        <a href="#">Learn more</a>
                    </button>
                </div>
            </div>
            <div class="flex gap-4 mb-8">
                <div class="flex">
                    <div class="flex items-center justify-center bg-orange-300 text-white h-12 w-12 rounded-full">03
                    </div>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold">Roundtables</h6>
                    <p class="font-light">
                        Curated conversations bringing together funders, practitioners, policymakers, and community
                        leaders to rethink philanthropy practices
                    </p>
                    <button class="w-fit text-left bg-orange-400 text-white mt-2 px-6 py-2 rounded-full">
                        <a href="#">Learn more</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Our story section --}}
    <div class="flex flex-col bg-white px-6 md:px-14 lg:px-20 py-20">
        <h3 class="text-3xl font-bold mb-6">Our Story</h3>
        <div class="font-light">
            RefugeeSkills was founded in 2018 with a simple but powerful mission: to help refugees rebuild their lives
            through education and skills training.

            What started as a small community initiative has grown into a comprehensive support organization serving
            hundreds of refugees each year.

            We believe that everyone deserves the opportunity to learn, grow, and contribute to their community,
            regardless of their circumstances.
        </div>
    </div>

    {{-- Mission Vision --}}
    <div class="flex flex-col px-6 md:px-14 lg:px-20 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            {{-- Mission --}}
            <div class="flex flex-col bg-white shadow-lg rounded-2xl p-8 border-t-4 border-orange-400">
                <div class="flex items-center justify-center bg-orange-100 h-14 w-14 rounded-full mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                <p class="font-light text-gray-600 leading-relaxed">
                    Our mission is to empower refugees and immigrants with the skills and resources they need to build
                    successful lives in their new communities.
                </p>
            </div>

            {{-- Vision --}}
            <div class="flex flex-col bg-white shadow-lg rounded-2xl p-8 border-t-4 border-orange-400">
                <div class="flex items-center justify-center bg-orange-100 h-14 w-14 rounded-full mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                <p class="font-light text-gray-600 leading-relaxed">
                    We envision a world where all individuals have equal opportunities to thrive, regardless of their
                    background or circumstances.
                </p>
            </div>

        </div>
    </div>

    {{-- Footer --}}
    @include('static.footer')
</body>

</html>
