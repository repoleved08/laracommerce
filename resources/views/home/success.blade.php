<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <base href="/public">
    <title>X10Aibots</title>
</head>

<body
    style="background-image: url('home/assets/bg.jpg'); background-position: center; background-repeat: no-repeat; background-attachment: scroll;background-size: cover;">
    <!-- Navbar -->
    @include('home.header')
    <div class="overflow-x-hidden">
        <!-- Text goes here -->


        <section class="w-screen pt-40 mb-14 ">

            <!-- component -->
            <div class="h-screen">
                <div class="bg-white p-6  md:mx-auto">
                    <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                        <path fill="currentColor"
                            d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                        </path>
                    </svg>
                    <div class="text-center">
                        <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Payment Done!</h3>
                        <p class="text-gray-600 my-2">Thank you for completing your secure online payment.</p>
                        <p> Have a great day! </p>
                        <div class="py-10 text-center">
                            <a href="{{url('userorders')}}"
                                class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                                Check Your Orders
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Services -->



        @include('home.footer')
    </div>

    {{-- <script src="home/script.js"></script> --}}
    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>