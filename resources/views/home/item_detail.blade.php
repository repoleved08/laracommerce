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

            <div class="m-4 mx-auto max-w-screen-lg bg-white rounded-md border border-gray-100 text-gray-600 shadow-md">
                <div class="relative flex h-full flex-col text-gray-600 md:flex-row">
                    <div class="relative p-8 md:w-4/6">
                        <div class="flex flex-col md:flex-row">
                            <h2 class="mb-2 text-2xl font-black">{{ $product->id }}</h2>
                            <span class="ml-2 text-xs uppercase mb-13">Tag Name: {{ $product->name }}</span>

                        </div>
                        <p class="mt-3 font-sans text-base tracking-normal mb-10">{{ $product->description }}</p>
                        <span class="ml-2 text-xs uppercase mb-6">Category: {{ $product->category }}</span>
                        <div class="flex flex-col md:flex-row md:items-end">
                            @if ($product->discount_price != null)
                            <del><p class="mt-6 text-4xl text-red-600 mr-3 font-black">${{ $product->price }}<sup
                                class="align-super text-sm">00</sup></p></del>
                                <p class="mt-6 text-4xl font-black">${{ $product->discount_price }}<sup
                                        class="align-super text-sm">00</sup></p>
                            @else
                                <p class="mt-6 text-4xl font-black">${{ $product->price }}<sup
                                        class="align-super text-sm">00</sup></p>
                            @endif
                            <span class="ml-2 text-xs uppercase">258 Sales</span>
                        </div>
                        <div class="mt-8 flex flex-col sm:flex-row">
                            <form action="{{ url('addto_cart', $product->id) }}" method="post">
                                @csrf
                                <input type="number" id="hs-trailing-button-add-on" min="1" value="1"
                                    name="quantity"
                                    class="py-3 px-4 mb-4  w-2/3 border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-600 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                <input type="submit" value="Buy"
                                    class="cursor-pointer py-3 px-4 mb-4 mr-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-emerald-400 text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 hover:bg-emerald-500">
                                </input>
                            </form>
                        </div>
                    </div>
                    <div class="mx-auto flex items-center px-5 pt-1 md:p-8">
                        <img class="block h-auto max-w-full rounded-md shadow-lg" src="products/{{ $product->image }}"
                            alt="Shop image" />
                    </div>
                </div>
            </div>

        </section>

        <!-- Services -->



        @include('home.footer')
    </div>

    {{-- <script src="home/script.js"></script> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>


