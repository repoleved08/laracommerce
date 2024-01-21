<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
</head>

<body>

    <!-- component -->
    <div class=" flex">

        <div class="bg-indigo-50 flex-grow py-12 px-10">
            
            <div>
                <div class="flex mt-10 justify-center">
                    <div class="overflow-x-auto">
                        <table class=" table-auto">
                            <thead class="justify-between">
                                <tr class="bg-indigo-600">
                                    <th class="px-16 py-2">
                                        <span class="text-gray-300">ID</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-indigo-50">Name</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-indigo-50">UserId</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-indigo-50">Email</span>
                                    </th>

                                    <th class="px-16 py-2">
                                        <span class="text-indigo-50">Price</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-indigo-50">Quantity</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-indigo-50">Product title</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-indigo-50">image</span>
                                    </th>
                                    <th class="px-16 py-2">
                                        <span class="text-indigo-50">Payment Mode</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-200">








                                @foreach ($order as $order)
                                    <tr class="bg-white border-4 border-gray-200 text-center">
                                        <td>
                                            {{ $order->id }}
                                        </td>
                                        <td class="px-16 py-2 flex flex-row items-center">
                                            <img class="h-8 w-8 object-cover" src="/products/{{ $order->image }}"
                                                alt="" />
                                        </td>
                                        <td>
                                            <span class="text-center ml-2 font-semibold"> {{ $order->name }}</span>
                                        </td>
                                        <td class="px-16 py-2">{{ $order->user_id }}</td>
                                        <td class="px-16 py-2">
                                            <span>{{ $order->email }}</span>
                                        </td>
                                        <td class="px-16 py-2">
                                            <span>${{ $order->price }}</span>
                                        </td>
                                        <td class="px-16 py-2">
                                            <span>{{ $order->quantity }}</span>
                                        </td>
                                        <td class="px-16 py-2">
                                            <span>{{ $order->product_title }}</span>
                                        </td>
                                        <td class="px-16 py-2">
                                            <span>{{ $order->payment_status }}</span>
                                        </td>
                                        <td>
                                            @if ($order->delivery_status == 'Processing')
                                                <button
                                                    class="button bg-purple-700 ">Process</button>
                                            @else
                                                <button class="button bg-lime-600 btn-sm" type="button"
                                                    id="button-addon1">
                                                    <i class="bi bi-check"></i> Done
                                                </button>
                                            @endif
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div></div>
                <div></div>
            </div>
            <div></div>
            <div></div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
