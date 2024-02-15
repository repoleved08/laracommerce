

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/out.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>X10Aibots</title>
</head>

<body>
    <!-- Navbar -->
    @include('home.header')
    <div class="overflow-x-hidden">
        <!-- Text goes here -->


        <section class="max-w-screen-lg mx-auto pt-40 mb-14 ">

               <main class="mt-10">

                <div class="mb-4 md:mb-0 w-full mx-auto relative">
                    <div class="px-4 lg:px-0">
                        <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                            {{$postd->title}}
                        </h2>
                        <a href="#" class="py-2 text-green-700 inline-flex items-center justify-center mb-2">
                            Cryptocurrency
                        </a>
                    </div>

                    <img src="{{ asset('products/' . $postd->image) }}"
                        class="w-full object-cover lg:rounded" style="height: 28em;" />
                </div>

                <div class="flex flex-col lg:flex-row lg:space-x-12">

                    <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                        <p class="pb-6">  {!! html_entity_decode($postd->body) !!}</p>


                    </div>

                    <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                        <div class="p-4 border-t border-b md:border md:rounded">
                            <div class="flex py-2">
                                <img src="https://randomuser.me/api/portraits/men/97.jpg"
                                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                                <div>
                                    <p class="font-semibold text-gray-700 text-sm"> Anonymous </p>
                                    <p class="font-semibold text-gray-600 text-xs"> Editor </p>
                                </div>
                            </div>
                            <p class="text-gray-700 py-3">
                               Get trading articles by following
                            </p>
                            <button
                                class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                                Follow
                                <i class='bx bx-user-plus ml-2'></i>
                            </button>
                        </div>
                    </div>

                </div>
            </main>
        </section>

        <!-- Services -->



        @include('home.footer')
    </div>

    {{-- <script src="home/script.js"></script> --}}
   
    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>


