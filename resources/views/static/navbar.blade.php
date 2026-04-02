<nav class="relative z-10 bg-transparent">
    <div class="mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <div class="flex items-center space-x-2">
                <a href="{{ url('/home-test') }}">
                    <img src="{{ asset('assets/landing/logo.png') }}" class="h-12 w-auto" />
                </a>
            </div>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center space-x-2">
                <a href="{{ url('/home-test') }}" class="text-white px-2 text-sm font-medium hover:opacity-80">Home</a>
                <a href="#" class="text-white px-2 text-sm font-medium hover:opacity-80">About</a>
                <div class="relative group">
                    <button class="text-white px-2 text-sm font-medium hover:opacity-80 flex items-center gap-1">
                        Programs
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute h-3 w-full top-full left-0"></div>
                    <div
                        class="absolute left-0  top-full pt-3 w-52 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <a href="#"
                            class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 rounded-t-lg">Fellowship
                            Program</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50">Catalytic
                            Seed Fund</a>
                        <a href="#"
                            class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 rounded-b-lg">Round
                            Tables</a>
                    </div>
                </div>

                <a href="#" class="text-white px-2 text-sm font-medium hover:opacity-80">Membership</a>
                <a href="{{ url('/blog-test') }}" class="text-white px-2 text-sm font-medium hover:opacity-80">Learning Lab</a>
                <a href="{{ url('/contact-test') }}" class="text-white px-2 text-sm font-medium hover:opacity-80">Contact</a>
            </div>

            <div class="flex items-center gap-3">
                <button class="hidden md:block button rounded-full bg-orange-500 px-6 py-2 text-white">
                    <a href="#" class="text-white">Partner with Us</a>
                </button>

                {{-- Hamburger Button --}}
                <button class="md:hidden text-white focus:outline-none"
                    onclick="this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'); document.getElementById('mobile-menu').classList.toggle('hidden')"
                    aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="{{ url('/home-test') }}" class="block text-white text-sm font-medium py-2 hover:opacity-80">Home</a>
            <a href="#" class="block text-white text-sm font-medium py-2 hover:opacity-80">About</a>

            {{-- Mobile Programs Accordion --}}
            <div x-data="{ open: false }">
                <button
                    class="w-full text-left text-white text-sm font-medium py-2 flex justify-between items-center hover:opacity-80"
                    onclick="
                                const sub = document.getElementById('mobile-programs');
                                sub.classList.toggle('hidden');
                                const arrow = document.getElementById('programs-arrow');
                                arrow.classList.toggle('rotate-180');
                            ">
                    Programs
                    <svg id="programs-arrow" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobile-programs" class="hidden pl-4 border-l border-white/30 ml-1">
                    <a href="#" class="block text-white/80 text-sm py-2 hover:opacity-80">Fellowship Program</a>
                    <a href="#" class="block text-white/80 text-sm py-2 hover:opacity-80">Catalytic Seed Fund</a>
                    <a href="#" class="block text-white/80 text-sm py-2 hover:opacity-80">Round Tables</a>
                </div>
            </div>

            <a href="#" class="block text-white text-sm font-medium py-2 hover:opacity-80">Membership</a>
            <a href="{{ url('/blog-test') }}" class="block text-white text-sm font-medium py-2 hover:opacity-80">Learning Lab</a>
            <a href="{{ url('/contact-test') }}" class="block text-white text-sm font-medium py-2 hover:opacity-80">Contact</a>

            <div class="mt-3">
                <button class="button rounded-full bg-orange-500 px-6 py-2 text-white w-full">
                    <a href="#" class="text-white">Partner with Us</a>
                </button>
            </div>
        </div>

    </div>
</nav>
