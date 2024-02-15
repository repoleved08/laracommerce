<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/out.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <title>X10Aibots</title>
</head>

<body
    style="background-image: url('{{asset('home/assets/bg.jpg')}}'); background-position: center; background-repeat: no-repeat; background-attachment: scroll;background-size: cover;">
    <!-- Navbar -->
    @include('home.header')
    <div class="overflow-x-hidden">
        <!-- Text goes here -->

        <div class="bg-gray-700">
            <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                    <svg viewBox="0 0 1024 1024"
                        class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                        aria-hidden="true">
                        <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                            fill-opacity="0.7" />
                        <defs>
                            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                                <stop stop-color="#7775D6" />
                                <stop offset="1" stop-color="#E935C1" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Stay Ahead of the Game:
                            <br>Understand and Use Bots Wisely.
                        </h2>
                        <p class="mt-6 text-lg leading-8 text-gray-300">
                            Our bot is equipped with advanced AI technology that learns from past trades and market
                            conditions to predict future movements. This allows it to make informed decisions,
                            increasing the likelihood of successful trades.
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                            <a href="{{ url('bots_page') }}"
                                class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                                started</a>
                            <a href="{{ url('blogpost') }}" class="text-sm font-semibold leading-6 text-white">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    <div class="relative mt-16 h-80 lg:mt-8">
                        <img class="absolute left-0 top-0 md:w-[42rem] w-[22rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10 object-cover"
                            style="background-position: center; background-repeat: no-repeat; background-attachment: scroll;background-size: cover;"
                            src="{{asset('home/assets/mockups/lapto.jpeg')}}" alt="App screenshot">

                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 pt-14">

            <div class="flex flex-col items-center justify-center">
                <a href="{{ url('bots_page') }}"
                    class="relative p-0.5 inline-flex items-center justify-center font-bold overflow-hidden group rounded-md">
                    <span
                        class="w-full h-full bg-gradient-to-br from-[#ff8a05] via-[#ff5478] to-[#ff00c6] group-hover:from-[#ff00c6] group-hover:via-[#ff5478] group-hover:to-[#ff8a05] absolute"></span>
                    <span
                        class="relative px-6 py-3 transition-all ease-out bg-gray-900 rounded-md group-hover:bg-opacity-0 duration-400">
                        <span class="relative text-white">Get Started Today</span>
                    </span>


                </a>


                <p class="text-sm text-white mt-3">Join our 5,000+ Users Worldwide </p>
            </div>


            <!-- Services -->



            <div class="mt-10 flex flex-col items-center justify-center">
                <h1 class="font-bold text-white mb-3">HERE'S WHAT YOU GET</h1>


                @include('home.box')

                @include('home.bundle')
                <div class="mt-12 mb-12 flex flex-col items-center justify-center">


                </div>

                <!-- Community -->
                <div
                    class="mt-12 outline py-10 justify-center rounded-lg outline-offset-2 outline-blue-500 flex flex-col-reverse md:flex-row mb-6 ">
                    <div class="basis-1/2 justify-start py-6 items-start order-2 sm:order-1">
                        <h1 class="text-3xl font-bold text-white text-start ml-14">
                            <span>our community</span>
                            <span class="inline-block ml-3 pt-1">
                                <img src="{{asset('./assets/icons/check.png')}}" alt="">
                            </span>
                        </h1>
                        <p class="text-gray-400 text-start ml-14">Join Our community to get daily updates and bot configurations.</p>

                        <button onclick="runFunc"
                            class="text-white ml-14 bg-sky-500 mt-12  ring-2 ring-sky-500 ring-inset rounded-md sm:w-6/12 lg:w-5/12 py-4 baseline transform transition-transform duration-500 hover:scale-110 font-bold">
                            Join Community
                        </button>
                    </div>
                    <div class="basis-1/2 order-1 sm:order-2 text-end ml-18">
                        <img src="{{asset('home/assets/icons/tel.png')}}" width="350px" alt="Laptop">
                    </div>
                </div>

            </div>
        </div>
        @include('home.footer')
    </div>

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

</body>

</html>
