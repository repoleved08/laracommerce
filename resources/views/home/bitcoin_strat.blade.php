

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/out.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <title>X10Aibots</title>
</head>

<body
    style="background-image: url('{{asset('home/assets/bg.jpg')}}'); background-position: center; background-repeat: no-repeat; background-attachment: scroll;background-size: cover;">
    <!-- Navbar -->
    @include('home.header')
    <div class="overflow-x-hidden">
        <!-- Text goes here -->


        <section class=" pt-40 mb-14 ">
            <div class="flex justify-center items-center md:mx-20 bg-white">
                <form method="POST" action="{{ url('pay_strat', $totalprice) }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                    @csrf
                    <div class="row mb-12">
                        <div class="col-md-8 offset-md-2">
                            <p>
                            <div class="mb-4 mt-4">
                                X10 Package
                                {{ $totalprice }} USD
                            </div>
                            </p>
                            <input type="hidden" name="amount" value="{{ $totalprice }}" class="border-2 border-gray-300 px-2 py-1 rounded-md"> {{-- required --}}
                            <input type="hidden" name="coin" value="BTC" class="border-2 border-gray-300 px-2 py-1 rounded-md"> {{-- required -- Make sure you have set up your BTC wallet and have added it in your config file --}}
                            <input type="hidden" name="name" value="username" class="border-2 border-gray-300 px-2 py-1 rounded-md">
                            <input type="hidden" name="metadata" value="email" class="border-2 border-gray-300 px-2 py-1 rounded-md"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
            
                            <p>
                                <button type="submit" value="Pay Now!" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full">
                                    <i class="fa fa-plus-circle fa-lg"></i> Pay with Crypto Now!
                                </button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            

        </section>

        <!-- Services -->



        @include('home.footer')
    </div>
    

    {{-- <script src="home/script.js"></script> --}}
   


</body>

</html>
