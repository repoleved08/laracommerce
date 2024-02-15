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
    style="background-image: url('{{('home/assets/bg.jpg')}}'); background-position: center; background-repeat: no-repeat; background-attachment: scroll;background-size: cover;">
    <!-- Navbar -->
    @include('home.header')
    <div class="overflow-x-hidden">
        <!-- Text goes here -->


        <!-- ====== Blog Section Start -->
        <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white dark:bg-dark">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center -mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[510px] text-center lg:mb-20">
                            <span class="block mb-2 text-lg font-semibold text-primary">
                                Our Blogs
                            </span>
                            <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] dark:text-white">
                                Our Recent News
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available
                                but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4">
                    
                    @foreach ($post as $post)
                        
                    

                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="w-full mb-10">
                            <div class="mb-8 overflow-hidden rounded">
                                <img src="products/{{$post->image}}"
                                    alt="image" class="w-full" />
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-blue-900  rounded bg-primary">
                                    {{$post->created_at}}
                                </span>
                                <h3>
                                    <a href="{{url('detailed_page',$post->id)}}"
                                        class="inline-block mb-4 text-xl font-semibold text-dark  hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        {{$post->title}}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                 {!! html_entity_decode($post->short_description) !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- ====== Blog Section End -->


        <!-- ====== Cards Section Start -->
        <section class="bg-gray-2 pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    {{-- @foreach ($post as $post)
                        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                            <div
                                class="mb-10 overflow-hidden rounded-lg bg-white shadow-1 duration-300 hover:shadow-3 dark:bg-dark-2 dark:shadow-card dark:hover:shadow-3">
                                <img src="products/{{$post->image}}" alt="image" class="w-full" />
                                <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                                    <h3>
                                        <a href="javascript:void(0)"
                                            class="mb-4 block text-xl font-semibold text-dark hover:text-primary text-blue sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                            {{$post->title}}
                                        </a>
                                    </h3>
                                    <p class="mb-7 text-base leading-relaxed text-body-color dark:text-dark-6">
                                        {!! html_entity_decode($post->short_description) !!}
                                    </p>

                                    <a href="javascript:void(0)"
                                        class="inline-block rounded-full border border-gray-3 px-7 py-2 text-base font-medium text-body-color transition hover:border-primary hover:bg-primary hover:text-white dark:border-dark-3 dark:text-dark-6">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                     --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Cards Section End -->






        <!-- Services -->



        @include('home.footer')
    </div>

    {{-- <script src="home/script.js"></script> --}}
    
    <script src="/home/assets/script.js"></script>

</body>

</html>
