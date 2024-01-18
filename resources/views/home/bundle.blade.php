<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    @foreach ($product as $products)
        <div
            class="flex items-center justify-center mt-12 outline py-5 rounded-lg outline-offset-2 outline-blue-500 flex flex-col mb-6">
            <div class="mt-3">
                <h2 class="text-white text-center text-2xl font-bold">{{ $products->name }}</h2>
                <img src="products/{{$products->image}}" width="300px" alt="Icon">
            </div>
            @if ($products->discount_price != null)
           
            <del class="text-white-500 text-4xl font-bold">${{$products->price}}</del>
            <h1 class="text-4xl text-white font-bold">${{ $products->discount_price }}/once off</h1>
           @elseif($products->discount_price == null)
            <h1 class="text-4xl text-white font-bold">${{ $products->price }}/once off</h1>

            @endif
            <h2 class="text-white mt-3 mb-4"> {{ $products->description }} </h2>
            <button
                class="text-white bg-sky-500 ring-2 ring-sky-500 ring-inset rounded-lg sm:w-6/12 lg:w-4/12 px-6 py-4 baseline transform transition-transform duration-500 hover:scale-110 font-bold">
                Add to Cart <span class="ml-5"><font-awesome-icon :icon="['fas', 'cart-shopping']" /></span>
            </button>

        </div>

    @endforeach

    {!!$product->withQueryString()->links('pagination::tailwind ')!!}


</div>
