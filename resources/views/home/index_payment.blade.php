






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


        <section class="w-screen pt-40 mb-14 ">

            <div class="panel panel-default">
                <div class="panel-body">
                    <h1
                        class="text-3xl md:text-5xl font-extrabold text-center uppercase mb-12 bg-gradient-to-r from-indigo-400 via-purple-500 to-indigo-600 bg-clip-text text-transparent transform -rotate-2">
                        Proceed with Payment</h1>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('stripenew',$totalprice) }}" method="POST" id="card-form">
                        @csrf
                        
                        <div style="display: grid; place-items: center;">
                            <button type="submit" class="w-1/2 bg-indigo-500 justify-center align-center items-center uppercase rounded-xl font-extrabold text-white px-6 h-12">Pay Here👉</button>
                        </div>
                    </form>
                </div>
            </div>

        </section>

        <!-- Services -->



        @include('home.footer')
    </div>
    <script src="https://js.stripe.com/v3/"></script>

    {{-- <script src="home/script.js"></script> --}}
    
    

</body>

</html>


