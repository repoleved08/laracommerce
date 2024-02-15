<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="/home/output.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/out.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <title>X10Aibots</title>
</head>

<body
    style="background-image: url('{{asset('home/assets/bg.jpg')}}'); background-position: center; background-repeat: no-repeat; background-attachment: scroll;background-size: cover;">
    <!-- Navbar -->
    @include('home.header')
    <div class="overflow-x-hidden">
        <!-- Text goes here -->



            <div class="mt-10 flex flex-col items-center justify-center">

                @include('home.bundle')
                <div class="mt-12 mb-12 flex flex-col items-center justify-center">


                </div>

                <!-- Community -->
             

            </div>
        </div>
        @include('home.footer')
    </div>


    <script>
        const btn = document.getElementById('menu-btn');
        const nave = document.getElementById('menu');
        const menuButton = document.getElementById("menu-button");
        const menu = document.querySelector("[role='menu']");


        btn.addEventListener('click', () => {
            btn.classList.toggle('open');
            nave.classList.toggle('flex');
            nave.classList.toggle('hidden');
        })

        menuButton.addEventListener("click", function(e) {
            e.stopPropagation();
            menu.classList.toggle("hidden");
        });

        document.addEventListener("click", function() {
            if (!menu.classList.contains("hidden")) {
                menu.classList.add("hidden");
            }
        });
    </script>

</body>

</html>
