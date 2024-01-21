<nav class="fixed z-10 bg-black bg-opacity-50 transition-colors duration-200 ease-in-out w-full px-12 py-2" >
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="pt-2">
            <a href="{{url('/')}}" class="text-black">
                <img src="home/assets/mockups/ss.png" width="50px" alt="Icon">
            </a>
        </div>
        <!-- Button -->
        <div class="hidden md:flex space-x-2">
            <a href="#" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Strategies</a>
            <a href="{{url('blogpost')}}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Blogs</a>
            <a href="{{url('userorders')}}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Orders</a>
            <a href="{{url('show_cart')}}" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Cart</a>
            <div class="group relative inline-block pt-2">
                <a href="#" class="pt-2 text-white font-bold hover:text-darkGrayishBlue">
                    Menu
                    <span
                        class="absolute right-0 top-full w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 group-hover:block hidden">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#"
                                class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 hover:text-darkGrayishBlue"
                                role="menuitem">BROKERS</a>
                        </div>
                    </span>
                </a>
            </div>
            @if (Route::has('login'))
            @auth 
                
                <x-app-layout>
                </x-app-layout>
                
            @else
            <a href="{{ route('login') }}" class="text-white font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
                    Login 
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-white font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
                    Register 
                </a>
                @endif
                @endauth
        @endif
        
        </div>
        <!-- Hamburger -->
        <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
            <span class="hamburger-top"></span>
            <span class="hamburger-middle"></span>
            <span class="hamburger-bottom"></span>
        </button>
    </div>
    <!-- Mobile menu -->
    <div class="md:hidden">
        <div class="flex flex-col items-center justify-center space-y-4 mt-6 mb-6 w-3/4">
            <a href="#" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Telegram</a>
            <a href="#" class="p-3 pt-2 text-white font-bold hover:text-darkGrayishBlue">Support</a>
            <div class="group relative inline-block pt-2">
                <a href="#" class="pt-2 text-white font-bold hover:text-darkGrayishBlue">Menu
                    <span class="ml-2"><i class="fas fa-chevron-down"></i></span>
                    <span
                        class="relative right-0 top-full w-40 bg-black bg-opacity-50 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 group-hover:block hidden">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" class="block px-3 py-2 text-sm text-white hover:text-darkGrayishBlue"
                                role="menuitem">BROKERS</a>
                        </div>
                    </span>
                </a>
            </div>
            
            <button class="text-red font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
            
            </button>
            
            
            <a href="{{ route('login') }}" class="text-white font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
                <span>Login 
            </a>
            <a href="{{ route('register') }}" class="text-white font-bold md:block p-3 px-6 pt-2 hover:text-darkGrayishBlue">
                <span>Register 
            </a>
        
            
        </div>
    </div>
</nav>
