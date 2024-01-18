<!doctype html>
<html lang="en">
@include('admin.head')

<body>
    <!-- preloader -->
    <div class="preloader">
        <img src="admin/logo.svg" alt="logo">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ preloader -->

    <!-- sidebars -->

    <!-- notifications sidebar -->
    <div class="sidebar" id="notifications">
        <div class="sidebar-header d-block align-items-end">
            <div class="align-items-center d-flex justify-content-between py-4">
                Notifications
                <button data-sidebar-close>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                </li>
            </ul>
        </div>
        @include('admin.sidebar')
        <!-- ./ notifications sidebar -->

        <!-- settings sidebar -->
        @include('admin.settings')
        <!-- ./ settings sidebar -->

        <!-- search sidebar -->
        @include('admin.search')
        <!-- ./ search sidebar -->

        <!-- ./ sidebars -->

        <!-- menu -->
        @include('admin.menu')
        <!-- ./  menu -->

        <!-- layout-wrapper -->
        <div class="layout-wrapper">

            <!-- header -->
            @include('admin.mobile')
            <!-- ./ header -->

            <!-- content -->
            <!-- begin::preloader-->
            <div class="preloader">
                <div class="preloader-icon"></div>
            </div>
            <!-- end::preloader -->


            <div class="form-wrapper">
                <div class="container">
                    @if (session()->has('message'))
                        <div class="alert alert-success">

                            {{ session()->get('message') }}

                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="row g-0">
                            <div class="col">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="ltf-block-logo d-block d-lg-none text-center text-lg-start">
                                            <img width="60" src="admin/logo.svg" alt="logo">
                                        </div>
                                        <div class="my-5 text-center text-lg-start">
                                            <h1 class="display-8">Update Products</h1>

                                        </div>
                                        <form action="{{ url('/change_product',$product->id) }}" method="POST"
                                            enctype="multipart/form-data" class="row g-3">
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Product Name</label>
                                                <input type="text" class="form-control" id="inputName"
                                                    name="name" value="{{$product->name}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="description" class="form-label">Product Description</label>
                                                <input type="text" class="form-control" id="inputDescription"
                                                    name="description" value="{{$product->description}}">
                                            </div>
                                            <div class="col-6">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="number" class="form-control" name="price"
                                                    id="inputPrice" value="{{$product->price}}" placeholder="Price">
                                            </div>
                                            <div class="col-6">
                                                <label for="price_discount" class="form-label">Price Discounted</label>
                                                <input type="number" class="form-control" name="discount_price"
                                                    id="inputDiscount" value="{{$product->discount_price}}" placeholder="Discount">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input type="number" class="form-control" value="{{$product->quantity}}" id="inputQuantity"
                                                    name="quantity">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputState" class="form-label">Category</label>
                                                <select id="inputState" name="category" class="form-select">

                                                    <option value="{{ $product->category }}">  {{ $product->category }} </option>

                                                    @foreach ($category as $category)
                                                        <option value="{{ $category->cat_name }}"> {{ $category->cat_name }} </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Current image</label>
                                                <a href="#">
                                                    <img src="/products/{{ $product->image }}" class="rounded"
                                                        width="40" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="inputImage" class="form-label">Product Image</label>
                                                <input type="file" class="form-control " name="image"
                                                    id="inputImage" placeholder="Upload Image">
                                            </div>

                                            <div class="text-center text-lg-start mb-5">
                                                <input type="submit" class="btn btn-primary" value="Update Product">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ content -->

            <!-- content-footer -->
            <footer class="content-footer">
                <div><a href="https://cakeadmin.com" target="_blank">X10aibots.com</a> © 2024</div>
                <div>
                    <nav class="nav gap-4">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ content-footer -->

        </div>
        <!-- ./ layout-wrapper -->

        <!-- JQuery -->
        <script src="admin/libs/jquery-3.7.1.min.js"></script>

        <!-- Nicescroll -->
        <script src="admin/libs/nicescroll.js"></script>

        <!-- Apex chart -->
        <script src="admin/libs/charts/apex/apexcharts.min.js"></script>

        <!-- Slick -->
        <script src="admin/libs/slick/slick.min.js"></script>

        <!-- Examples -->
        <script src="admin/js/examples/dashboard.js"></script>

        <!-- Main Javascript file -->
        <script src="admin/js/app.js"></script>
</body>

</html>
