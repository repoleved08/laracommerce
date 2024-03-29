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

            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl sm:text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Simple no-tricks pricing strategies
                        </h2>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Get stress-free trades with our accurate strategies. No need to worry anymore. Get a higher accuracy strategies to boost your trading.</p>
                    </div>
                    <div
                        class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                        <div class="p-8 sm:p-10 lg:flex-auto">
                            <h3 class="text-2xl font-bold tracking-tight text-gray-900">Lifetime membership</h3>
                            <p class="mt-6 text-base leading-7 text-gray-600">When you pay for strategies, you not only get a higher chances of making profit but also you will get access to the active channel that will give you guide throughout the entire trading.</p>
                            <div class="mt-10 flex items-center gap-x-4">
                                <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">What’s included
                                </h4>
                                <div class="h-px flex-auto bg-gray-100"></div>
                            </div>
                            <ul role="list"
                                class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Private forum access
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Member resources
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Entry to annual conference
                                </li>
                                <li class="flex gap-x-3">
                                    <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Official member t-shirt
                                </li>
                            </ul>
                        </div>
                    
                    </div>
                    <div class="grid mt-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($strategy as $strategy)
                        <div class="-mt-3 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                            <div
                                class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                                <div class="mx-auto max-w-xs px-8">
                                    <p class="text-base font-semibold text-gray-600">
                                        {{$strategy->title}}
                                    </p>
                                    <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                        <span class="text-5xl font-bold tracking-tight text-gray-900">${{$strategy->price}}</span>
                                        <span
                                            class="text-sm font-semibold leading-6 tracking-wide text-gray-600">USD</span>
                                    </p>
                                    
                                    <a href="{{ url('strategy_cart', $strategy->id) }}"
                                        class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                        access</a>
                                    <p class="mt-6 text-xs leading-5 text-gray-600">
                                        {!! html_entity_decode($strategy->short_description) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
