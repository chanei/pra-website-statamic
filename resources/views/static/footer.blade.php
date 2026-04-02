<footer class="px-6 md:px-14 lg:px-20 py-10 bg-[#1b2531] border-t border-gray-200">
    <div class="flex flex-col">
        <div class="flex mb-8">
            <img src="{{ asset('assets/landing/logo.png') }}" class="h-10 w-auto" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-white/40 mb-8">
            <div>
                <h6 class="text-sm text-white">Address</h6>
                <p class="mb-4">
                    Philanthropy Reform Alliance <br />
                    Kampala <br />
                    Plot X Kampala · Uganda
                </p>
                <h6 class="text-sm text-white">Contact</h6>
                <p>
                    <a href="tel:+256700000000">+256 700 000 000</a> <br />
                    <a href="mail:info@philanthropyreform.org">info@philanthropyreform.org</a>
                </p>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4 text-white">Quick Links</h3>
                <ul>
                    <li class="mb-2"><a href="#">About Us</a></li>
                    <li class="mb-2"><a href="#">Contact</a></li>
                    <li class="mb-2"><a href="#">Join Us</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4 text-white">Programs</h3>
                <ul>
                    <li class="mb-2"><a href="#">Fellowship Programs</a></li>
                    <li class="mb-2"><a href="#">Catalytic Seed Program</a></li>
                </ul>
            </div>
        </div>

        {{-- Footer Bottom --}}
        <div
            class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-0 pt-6 border-t border-white/10 text-white/40">
            <div class="flex">
                <p class="font-light text-xs">Copyright 2026 Philanthropy Reform Alliance. All rights reserved.</p>
            </div>
            <div class="flex gap-4 ml-auto">
                <a href="#" class="font-light text-xs">Become a member</a>
                <a href="#" class="font-light text-xs">Partner with us</a>
            </div>
        </div>
    </div>
</footer>
