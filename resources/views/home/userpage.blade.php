<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="/home/output.css" rel="stylesheet"> --}}
    <base href="/public">
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
  
    <title>X10Aibots</title>
</head>

<body
    style="background-image: url('home/assets/bg.jpg'); background-position: center; background-repeat: no-repeat; background-attachment: scroll;background-size: cover;">
    <!-- Navbar -->
    @include('home.header')
    <div class="overflow-x-hidden">
        <!-- Text goes here -->
        <div class="container mx-auto px-4 pt-14">
            <div class="flex items-center justify-center mt-3">
                <img src="home/assets/mockups/ss.png" width="300px" alt="Icon">
            </div>
            <!-- Add pt-4 here -->
            <p class="text-4xl font-bold tracking-wide flex items-center justify-center text-white neonText">Make Money
                Smart, Not Hard</p>
            <p class="text-3xl tracking-tight flex items-center justify-center text-white leading-loose pt-4">We will
                show you How</p>
            <div class="size-11/12  mt-14 mb-6 flex items-center justify-center relative ">
                <img src="home/assets/mockups/phones.png" alt="Icon" class=" lg:ml-0 transform scale-100">
            </div>

            <!-- Get Started -->

            <div class="flex flex-col items-center justify-center">
                <button
                <a href="#_" class="relative p-0.5 inline-flex items-center justify-center font-bold overflow-hidden group rounded-md">
                    <span class="w-full h-full bg-gradient-to-br from-[#ff8a05] via-[#ff5478] to-[#ff00c6] group-hover:from-[#ff00c6] group-hover:via-[#ff5478] group-hover:to-[#ff8a05] absolute"></span>
                    <span class="relative px-6 py-3 transition-all ease-out bg-gray-900 rounded-md group-hover:bg-opacity-0 duration-400">
                    <span class="relative text-white">Get Staarted Today</span>
                    </span>
                    </a>
                    
                </button>


                <p class="text-sm text-white mt-3">Join our 5,000+ Users Worldwide </p>
            </div>


            <!-- Services -->

            <div class="mt-4 flex flex-col items-center justify-center">
                <h1 class="text-5xl font-extrabold text-white">A Massive Upgrade</h1>
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-5 gap-4 mb-12 mt-8">
                    <div class="flex flex-col items-center">
                        <img src="home/assets/icons/candlestick.png" class="mx-auto max-w-xs" width="80px"
                            alt="">
                        <p class="text-white">Trades all major Pairs indices & mental</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="home/assets/icons/step.png" class="mx-auto max-w-xs" width="80px" alt="">
                        <p class="text-white">beginer friendly with 2 trading modes</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="home/assets/icons/devices.png" class="mx-auto max-w-xs" width="80px" alt="">
                        <p class="text-white">Works on phone and laptop</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="home/assets/icons/peer.png" class="mx-auto max-w-xs" width="80px" alt="">
                        <p class="text-white">works with any <br> broker</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="home/assets/icons/support.png" class="mx-auto max-w-xs" width="80px" alt="">
                        <p class="text-white font-bold ">24/7 LIVE CHAT <br> SUPPORT</p>
                    </div>
                </div>
            </div>

            <div class="mt-10 flex flex-col items-center justify-center">
                <h1 class="font-bold text-white mb-3">HERE'S WHAT YOU GET</h1>
                <h1 class="text-3xl text-white font-bold">
                    It's time you trade like a pro
                </h1>

                @include('home.box')
                <!-- Texts -->
                <div class="flex flex-col items-center justify-center">
                    <h1 class="font-bold text-white">Get access to X10Aibots</h1>
                    <h1 class="text-4xl mt-3 font-bold text-white">Embrace the contemporary approach, Earn
                        intelligently.
                    </h1>
                    <ul class="flex flex-col items-start justify-center mt-7 ml-8 space-y-6 mx-auto w-3/4">
                        <li class="text-white text-2xl">
                          <i class="fas fa-check"></i>
                            <span class="ml-4">fully automated</span>
                        </li>
                        <li class="text-white text-2xl">
                          <i class="fas fa-check"></i>
                            <span class="ml-4">Lifetime mentorship</span>
                        </li>
                        <li class="text-white text-2xl">
                          <i class="fas fa-check"></i>
                            <span class="ml-4">24/7 support and live chat</span>
                        </li>
                        <li class="text-white text-2xl">
                          <i class="fas fa-check"></i>
                            <span class="ml-4">Access to VIP group</span>
                        </li>
                        <li class="text-white text-2xl">
                          <i class="fas fa-check"></i>
                            <span class="ml-4">works with any broker</span>
                        </li>
                        <li class="text-white text-2xl">
                          <i class="fas fa-check"></i>
                            <span class="ml-4">98% winning rate</span>
                        </li>
                        <li class="text-white text-2xl">
                          <i class="fas fa-check"></i>

                            <span class="ml-4">once off purchase</span>
                        </li>
                    </ul>
                </div>
                @include('home.bundle')
                <div class="mt-12 mb-12 flex flex-col items-center justify-center">
                    <h1 class="text-2xl text-white font-bold">WARNING: PRICE INCREASING SOON</h1>
                    <p class="text-white">The Price will increase to $599 in a month, act now</p>
                    <div
                        class="grid grid-cols-1 items-center justify-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-5 gap-2 mt-8">
                        <div class="flex flex-row items-center justify-center">
                            <img src="home/assets/icons/asset_3.png" class="mx-auto max-w-xs" width="40px"
                                alt="">
                            <span class="text-white">IMMEDIATE ACCESS</span>
                        </div>
                        <div class="flex flex-row items-center justify-center">
                            <img src="home/assets/icons/asset_4.png" class="mx-auto max-w-xs" width="40px"
                                alt="">
                            <p class="text-white">SATISFACTION GUARANTEE</p>
                        </div>
                        <div class="flex flex-row items-center justify-center">
                            <img src="home/assets/icons/asset_5.png" class="mx-auto max-w-xs" width="40px"
                                alt="">
                            <p class="text-white">SECURE PURCHASE</p>
                        </div>
                    </div>



                    <div class="mt-6 mb-6">
                        <h1 class="text-4xl font-bold text-white">Follow Us</h1>
                        <div class="flex space-x-2 align-center justify-center">
                            <div class="items-center text-3xl">
                                <i class="fab fa-instagram text-white"></i>
                            </div>
                            <div class="items-center text-3xl">
                                <i class="fab fa-telegram text-white"></i>
                            </div>
                            <div class="items-center text-3xl">
                                <i class="fab fa-youtube text-white"></i>
                            </div>
                        </div>






                    </div>

                    <!-- Community -->
                    <div
                        class="mt-12 outline py-10 justify-center rounded-lg outline-offset-2 outline-blue-500 flex flex-col-reverse md:flex-row mb-6 ">
                        <div class="basis-1/2 justify-start py-6 items-start order-2 sm:order-1">
                            <h1 class="text-3xl font-bold text-white text-start ml-14">
                                <span>our community</span>
                                <span class="inline-block ml-3 pt-1">
                                    <img src="./assets/icons/check.png" alt="">
                                </span>
                            </h1>
                            <p class="text-gray-400 text-start ml-14">X10Aibots has a dedicated channel where the
                                results of its trading activities are posted. This allows users to keep track of its
                                performance and make informed decisions based on its past results. Please note that past
                                performance is not indicative of future results, and it’s important to understand the
                                risks involved in trading. 😊</p>

                            <button onclick="runFunc"
                                class="text-white ml-14 bg-sky-500 mt-12  ring-2 ring-sky-500 ring-inset rounded-md sm:w-6/12 lg:w-5/12 py-4 baseline transform transition-transform duration-500 hover:scale-110 font-bold">
                                Join Community
                            </button>
                        </div>
                        <div class="basis-1/2 order-1 sm:order-2 text-end ml-18">
                            <img src="home/assets/icons/tel.png" width="350px" alt="Laptop">
                        </div>
                    </div>

                </div>
            </div>
            @include('home.footer')
        </div>

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>
