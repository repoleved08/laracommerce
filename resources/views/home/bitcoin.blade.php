<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Btc</h2>
    <form method="POST" action="{{url('pay',$totalprice)}}" accept-charset="UTF-8" class="form-horizontal" role="form">
        @csrf
            <div class="row" style="margin-bottom:50px;">
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        <div>
                            Deluxe Package
                            {{$totalprice}} BTC
                        </div>
                    </p>
                    <input type="hidden" name="amount" value="{{$totalprice}}"> {{-- required --}}
                    <input type="hidden" name="coin" value="BTC"> {{-- required -- Make sure you have set up your BTC wallet and have added it in your config file--}}
                    <input type="hidden" name="name" value="username">
                    <input type="hidden" name="metadata" value="email" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                    
                    <p>
                        <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                        </button>
                    </p>
                </div>
            </div>
        </form>
</body>
</html>
