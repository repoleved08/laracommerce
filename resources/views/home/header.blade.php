<nav class="fixed z-10 bg-black bg-opacity-50 transition-colors duration-200 ease-in-out w-full px-12 py-2">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="pt-2">
            <a href="{{ url('/') }}" class="text-black">
                <img src="{{asset('home/assets/mockups/43.png')}}" width="50px" alt="Icon">
            </a>
        </div>
        <!-- Button -->
        <div class="hidden md:flex space-x-2">
            <a href="{{url('bots_page')}}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Bots</a>
            <a href="{{url('strategies')}}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Strategies</a>
            <a href="{{ url('blogpost') }}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Blogs</a>
            <a href="{{ url('userorders') }}"
                class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Orders</a>
            <a href="{{ url('show_cart') }}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Cart</a>

            <div class="relative inline-block text-left">
                <div>
                    <button type="button"
                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Options
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

    
                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-0">Telegram</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-1">Support</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-2">Whatsapp</a>
                        <form method="POST" action="#" role="none">
                            <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-3">Twitter</button>
                        </form>
                    </div>
                </div>
            </div>

            @if (Route::has('login'))
                @auth

                    <x-app-layout>
                    </x-app-layout>
                @else
                    <a href="{{ route('login') }}"
                        class="text-white font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
                        Login
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="text-white font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
                            Register
                        </a>
                    @endif
                @endauth
            @endif

        </div>
        <!-- Hamburger -->
        <button id="menu-btn" class=" block hamburger md:hidden focus:outline-none">
            <span class="hamburger-top"></span>
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
        </button>
    </div>
    <!-- Mobile menu -->
    <div class="md:hidden">
        <div id="menu"
            class=" bg-indigo-950 bg-opacity-90 hidden transition-colors duration-200 ease-in-out flex-col items-center  justify-center drop-shadow-md  mt-2  mb-6 w-full">
            <a href="{{url('bots_page')}}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Bots</a>
            <a href="{{url('strategies')}}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Strategies</a>
            <a href="{{ url('blogpost') }}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Blog</a>
            <a href="{{ url('userorders') }}"
                class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Orders</a>
            <a href="{{ url('show_cart') }}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Cart</a>
            <div class="relative inline-block text-left">
                <div>
                    <button type="button"
                        class=" w-full justify-center hidden gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Options
                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="menu-item-0">Telegram</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                            tabindex="-1" id="menu-item-1">Support</a>
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                            tabindex="-1" id="menu-item-2">Whatsapp</a>
                        <form method="POST" action="#" role="none">
                            <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-3">Twitter</button>
                        </form>
                    </div>
                </div>
            </div>




            @if (Route::has('login'))
                @auth

                    <x-app-layout>
                    </x-app-layout>
                @else
                    <a href="{{ route('login') }}"
                        class="text-white font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
                        Login
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="text-white font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
                            Register
                        </a>
                    @endif
                @endauth
            @endif


        </div>
    </div>
</nav>






<script>
    const btn = document.getElementById('menu-btn');
    const nave = document.getElementById('menu');
    const menuButton = document.getElementById("menu-button");
    const menu = document.querySelector("[role='menu']");


    btn.addEventListener('click', () => {
        btn.classList.toggle('open');
        nave.classList.toggle('flex');
        nave.classList.toggle('hidden');
    })

    menuButton.addEventListener("click", function(e) {
        e.stopPropagation();
        menu.classList.toggle("hidden");
    });

    document.addEventListener("click", function() {
        if (!menu.classList.contains("hidden")) {
            menu.classList.add("hidden");
        }
    });
</script>
