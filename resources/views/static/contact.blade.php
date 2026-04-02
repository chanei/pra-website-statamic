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
        <h1 class="text-4xl font-bold mb-4">Get in Touch</h1>
        <p class="text-lg">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as
            possible.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 w-full gap-8 mt-10">
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-2xl p-6">
                <div class="flex flex-col items-center gap-4 bg-white shadow-lg rounded-2xl p-6">
                    <img src="{{ asset('assets/landing/email-icon.png') }}" class="h-12" />
                    <h3 class="text-lg font-bold">Email Us</h3>
                    <p><a href="mailto:info@philanthropyreform.org"
                            class="hover:underline">info@philanthropyreform.org</a></p>
                </div>
                <div class="flex flex-col items-center gap-4 bg-white shadow-lg rounded-2xl p-6">
                    <img src="{{ asset('assets/landing/phone-icon.png') }}" class="h-12" />
                    <h3 class="text-lg font-bold">Call Us</h3>
                    <p><a href="tel:+256700000000" class="hover:underline">+256 700 000 000</a></p>
                </div>
                <div class="flex flex-col items-center gap-4 bg-white shadow-lg rounded-2xl p-6">
                    <img src="{{ asset('assets/landing/location-icon.png') }}" class="h-12" />
                    <h3 class="text-lg font-bold">Visit Us</h3>
                    <p>Plot X Kampala, Uganda</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 bg-white shadow-lg rounded-2xl p-6">
                <h1 class="text-2xl mb-4 text-left">Send us a message</h1>
                <form class="flex flex-col gap-6">
                    <input type="text" placeholder="Your Name"
                        class="border border-gray-300 rounded-lg px-4 py-4 focus:outline-none focus:ring-2 focus:ring-orange-500" />
                    <input type="email" placeholder="Your Email"
                        class="border border-gray-300 rounded-lg px-4 py-4 focus:outline-none focus:ring-2 focus:ring-orange-500" />
                    <textarea placeholder="Your Message" rows="6"
                        class="border border-gray-300 rounded-lg px-4 py-4 focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                    <button type="submit"
                        class="button rounded-full bg-orange-500 px-6 py-4 text-white w-max self-end">Send
                        Message</button>
                </form>
            </div>
        </div>
    </div>

    @include('static.footer')
</body>

</html>
