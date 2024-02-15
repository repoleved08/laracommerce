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

            <div class="m-4 mx-auto max-w-screen-lg bg-white rounded-md border border-gray-100 text-gray-600 shadow-md">
                <div class="relative flex  text-gray-600 md:flex-row">
                    <div class="relative p-8 md:w-4/6">
                        <div class="flex flex-col md:flex-row">
                            <h2 class="mb-2 text-2xl font-black">{{ $strategy->id }}</h2>
                            <span class="ml-2 text-xs uppercase mb-13">Tag Name: {{ $strategy->title }}</span>

                        </div>
                        <p class="mt-3 font-sans text-base tracking-normal mb-10">{!! html_entity_decode($strategy->short_description) !!}</p>
                        <span class="ml-2 text-xs uppercase mb-6">Category: {{ $strategy->category }}</span>
                        <div class="flex flex-col md:flex-row md:items-end">

                            <p class="mt-6 text-4xl font-black">${{ $strategy->price }}<sup
                                    class="align-super text-sm">00</sup></p>

                            <span class="ml-2 text-xs uppercase">258 Sales</span>
                        </div>
                        <div class="mt-8 flex flex-col sm:flex-row">
                            <form action="{{ url('add_cart', $strategy->id) }}" method="post">
                                @csrf

                                <input type="submit" value="Add To Cart"
                                    class="cursor-pointer py-3 px-4 mb-4 mr-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-emerald-400 text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 hover:bg-emerald-500">
                                </input>
                            </form>
                        </div>
                    </div>
                    <div class="mx-auto flex items-center px-5 pt-1 md:p-8">
                        <img class="block h-auto max-w-full rounded-md shadow-lg" src="{{asset('home/assets/mockups/tester.png')}}"
                            alt="Shop image" />
                    </div>
                </div>
               
            </div>

        </section>

        <!-- Services -->



        @include('home.footer')
    </div>

    {{-- <script src="home/script.js"></script> --}}
    
    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>
