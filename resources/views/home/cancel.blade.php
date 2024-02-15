<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cancel</title>
</head>
<body>
    <!-- Page showing that payment with paypal did not go through and prompt the user to try again in tailwind css-->
    <div class="flex justify-center items-center h-screen bg-gray-200">
        <div class="bg-white p-8 rounded shadow-lg">
            <h1 class="text-2xl font-bold text-red-500">Payment Cancelled</h1>
            <p class="text-gray-500">Your payment was not successful, please try again</p>
            <a href="{{ url('/') }}" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go back</a>
        </div>
</body>
</html>
