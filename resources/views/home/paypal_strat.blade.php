<!doctype html>
<html>

<head>
    <meta charset="utf-8">
   
    <title>Pay USD.100</title>
   
</head>

<body>
    <h3>{{$totalprice}}</h3>
   <form action="{{url('paypals',$totalprice)}}" method="post">
    @csrf
    
    <input type="hidden" name="amount" value="{{$totalprice}}">
    <!--Tailwind button-->
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
        Pay with PayPal
    </button>




   </form>
   <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
