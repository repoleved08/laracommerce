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
        <section class=" bg-gray-100 py-12 sm:py-16 lg:py-20">
            <div class=" mt-8 px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-center">
                    <h1 class="text-2xl font-semibold text-gray-900"></h1>
                </div>

                <div class="mx-auto mt-8 max-w-md md:mt-12">
                    <div class="rounded-3xl bg-white shadow-lg">
                        <div class="px-4 py-6 sm:px-8 sm:py-10">
                            <div class="flow-root">
                                <ul class="my-8">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">

                                            {{ session()->get('message') }}

                                            <button class="close" type="button" data-dismiss="alert"
                                                aria-hidden="true">X</button>
                                        </div>
                                    @endif

                                    <?php $totalprice = 0; ?>

                                    @foreach ($cart as $cart)
                                        <li
                                            class="flex flex-col space-y-3 py-6 text-left sm:flex-row sm:space-x-5 sm:space-y-0">
                                            <div class="shrink-0 relative">
                                                <span
                                                    class="absolute top-1 left-1 flex h-6 w-6 items-center justify-center rounded-full border bg-white text-sm font-medium text-gray-500 shadow sm:-top-2 sm:-right-2">{{ $cart->quantity }}</span>
                                                <img class="h-12 w-12 rounded-md object-cover"
                                                    src="/products/{{ $cart->image }}" alt="" />
                                            </div>

                                            <div class=" flex flex-row justify-between">
                                                <div
                                                    class="flex flex-row justify-around sm:col-gap-5 sm:grid sm:grid-cols-2">
                                                    <div class="pr-8 sm:pr-5">
                                                        <p class="text-base font-semibold text-gray-900">
                                                            {{ $cart->description }}
                                                        </p>
                                                        <p class="mx-0 mt-1 mb-0 text-sm text-gray-400">
                                                            {{ $cart->product_title }} </p>
                                                    </div>

                                                    <div
                                                        class="mt-4 text-end items-end sm:mt-0 sm:items-start sm:justify-end">
                                                        <p
                                                            class="shrink-0 w-20 text-base font-semibold text-gray-900 sm:order-2 sm:ml-8 sm:text-right">
                                                            ${{ $cart->price }}.00</p>
                                                    </div>
                                                </div>
                                                <a onclick="return confirm("Are you sure?")" href="{{ url('delete_cart', $cart->id) }}"
                                                    class=" ml-3 text-red-400 ">Remove</a>
                                            </div>
                                        </li>
                                        <?php $totalprice = $totalprice + $cart->price; ?>
                                        <hr
                                            class="mx-0 mt-6 mb-0 h-0 border-r-0 border-b-0 border-l-0 border-t border-solid border-gray-300" />
                                    @endforeach
                                </ul>
                            </div>

                            <hr
                                class="mx-0 mt-6 mb-0 h-0 border-r-0 border-b-0 border-l-0 border-t border-solid border-gray-300" />


                            <div class="mt-6 flex items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">Total</p>
                                <p class="text-2xl font-semibold text-gray-900"><span
                                        class="text-xs font-normal text-gray-400">USD</span> {{ $totalprice }}.00</p>
                            </div>

                            <div class="mt-6 text-center">
                                <a href="{{url('payment_option', $totalprice)}}">
                                    <button type="button"
                                    class="group inline-flex w-full items-center justify-center rounded-md bg-sky-500 px-6 py-4 text-lg font-semibold text-black transition-all duration-200 ease-in-out focus:shadow hover:bg-gray-800">
                                    Place Order
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="group-hover:ml-8 ml-4 h-6 w-6 transition-all" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </button>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @include('home.footer')
    </div>

    <script src="https://cdn.tailwindcss.com"></script> 
    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>
