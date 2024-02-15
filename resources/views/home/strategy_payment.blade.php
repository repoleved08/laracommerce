<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="/home/output.css" rel="stylesheet"> --}}
    
    <link rel="stylesheet" href="{{asset('css/out.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>X10Aibots</title>
</head>

<body
    style="background-image: url('{{asset('home/assets/bg.jpg')}}'); background-position: center; background-repeat: no-repeat; background-attachment: scroll;background-size: cover;">
    <!-- Navbar -->
    @include('home.header')
    <div class="overflow-x-hidden mb-20">

        <div
            class="p-6 pt-40 pb-40 max-w-sm mx-auto bg-gray rounded-xl shadow-md flex flex-col items-center space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
           
            <div>
                <div class="text-2xl font-bold text-white ">Payment Options</div>
                <p class="text-green-500 font-bold mt-2 mb-2 text-2xl">Choose your preferred payment method.</p>
                <div class="mt-5 space-y-4 sm:space-y-0 sm:space-x-4 sm:flex">
                    <div class="relative inline-flex  group">
                        <div
                            class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <a href="{{url('paypal_strat', $totalprice)}}" title="Get quote now"
                            class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                            role="button">   <i class="fab fa-paypal"></i> <span class="ml-2">PayPal</span>
                        </a>
                    </div>

                    {{-- <div class="relative inline-flex  group">
                        <div
                            class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <a href="{{url('stripebtn', $totalprice)}}" title="Get quote now"
                            class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                            role="button">    <i class="fab fa-stripe"></i> <span class="ml-2">Stripe</span>
                        </a>
                    </div> --}}
                  
                   
                    <div class="relative inline-flex  group">
                        <div
                            class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        </div>
                        <a href="{{url('bitcoin_strat', $totalprice)}}" title="Get quote now"
                            class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                            role="button"> <i class="fab fa-bitcoin"></i> <span class="ml-2">Bitcoin</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('home.footer')
    </div>

    

</body>

</html>
