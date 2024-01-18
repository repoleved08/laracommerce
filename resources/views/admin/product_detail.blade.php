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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @if (session()->has('message'))
                            <div class="alert alert-success">

                                {{ session()->get('message') }}

                                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="d-md-flex gap-4 align-items-center">
                                <div class="d-none d-md-flex">All Products</div>
                                <div class="d-md-flex gap-4 align-items-center">
                                    <form class="mb-3 mb-md-0">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <select class="form-select">
                                                    <option>Sort by</option>
                                                    <option value="desc">Desc</option>
                                                    <option value="asc">Asc</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-select">
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="30">30</option>
                                                    <option value="40">40</option>
                                                    <option value="50">50</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle"
                                        aria-haspopup="true" aria-expanded="false">Actions</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom table-lg mb-0" id="products">
                            <thead>
                                <tr>
                                    <th>
                                        <input class="form-check-input select-all" type="checkbox"
                                            data-select-all-target="#products" id="defaultCheck1">
                                    </th>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Discount Price</th>
                                    <th>Created At</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $product)
                                    <tr>
                                        <td>
                                            <input class="form-check-input" type="checkbox">
                                        </td>
                                        <td>
                                            <a href="#">#{{ $product->id }}</a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="/products/{{ $product->image }}" class="rounded"
                                                    width="40" alt="...">
                                            </a>
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            <span class="text-success">In Stock</span>
                                        </td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>${{ $product->price }}</td>
                                        <td>${{ $product->discount_price }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td class="text-end">
                                            <div class="d-flex">
                                                <div class="dropdown ms-auto">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="#" class="dropdown-item">Action</a>
                                                        <a href="{{url('edit_product', $product->id)}}" class="dropdown-item">Edit Product</a>
                                                        <a href="{{ url('delete_product', $product->id) }}"
                                                            class="dropdown-item text-red-600">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- ./ content -->

                <!-- content-footer -->
                <footer class="content-footer">
                    <div><a href="https://cakeadmin.com" target="_blank">CakeAdmin</a> © 2023</div>
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
