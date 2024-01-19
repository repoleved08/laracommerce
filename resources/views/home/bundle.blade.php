<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    @foreach ($product as $products)
        <div
            class="flex items-center justify-center mt-12 outline py-5 rounded-lg outline-offset-2 outline-blue-500 flex-col mb-6">
            <div class="mt-3">
                <h2 class="text-white text-center text-2xl font-bold">{{ $products->name }}</h2>
                <img src="products/{{ $products->image }}" width="300px" alt="Icon">
            </div>
            @if ($products->discount_price != null)
                <del class="text-white-500 text-4xl font-bold">${{ $products->price }}</del>
                <h1 class="text-4xl text-white font-bold">${{ $products->discount_price }}/once off</h1>
            @elseif($products->discount_price == null)
                <h1 class="text-4xl text-white font-bold">${{ $products->price }}/once off</h1>
            @endif
            <h2 class="text-white mt-3 mb-4"> {{ $products->description }} </h2>

            <div class="mt-8 flex flex-col sm:flex-row">
                <div>
                    <label for="hs-trailing-button-add-on" class="sr-only">Label</label>
                    <div class="flex rounded-lg shadow-sm">
                        <form action="{{ url('addto_cart', $products->id) }}" method="post">
                            @csrf
                            <input type="number" id="hs-trailing-button-add-on" min="1" value="1"
                                name="quantity"
                                class="py-3 px-4 mb-4  w-2/3 border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-600 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <input type="submit" value="Add"
                                class="cursor-pointer py-3 px-4 mb-4 mr-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-emerald-400 text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 hover:bg-emerald-500">
                            </input>
                        </form>
                    </div>
                </div>

                <button
                    class="mr-2 mb-4 flex cursor-pointer items-center justify-center rounded-md border py-2 px-8 text-center text-white transition duration-150 ease-in-out hover:bg-emerald-500 hover:text-white">
                    <a href="{{ url('item_detail', $products->id) }}">Details</a></button>
            </div>


        </div>
    @endforeach

    {!! $product->withQueryString()->links('pagination::tailwind ') !!}


</div>
