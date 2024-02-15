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
                                <div class="d-none d-md-flex">All Orders</div>
                                <div class=" align-items-center">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Term" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                          <button class="btn btn-outline-secondary" type="button">Button</button>
                                        </div>
                                      </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom table-lg mb-0" id="products">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Userid </th>
                                    <th>Email</th>
                                    <th>Price</th>
                                    
                                    <th>Product Title</th>
                                    <th>Payment Mode</th>
                                    <th>Delivery status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $order)
                                    <tr>

                                        <td>
                                            <a href="#">#{{ $order->id }}</a>
                                        </td>
                                        <td>

                                            {{ $order->name }}

                                        </td>
                                        <td>{{ $order->user_id }}</td>

                                        <td>{{ $order->email }}</td>
                                        <td>${{ $order->price }}</td>
                                        
                                        <td>{{ $order->product_title }}</td>
                                       
                                        <td>{{ $order->payment_status }}</td>
                                        <td>
                                                <a class="btn btn-secondary btn-sm">{{ $order->delivery_status }}</a>
                                        </td>
                                        <td>
                                            @if ($order->delivery_status == 'Processing')
                                            <a href="{{ url('delivery_status', $order->id) }}"
                                                class="btn btn-success">Process</a>
                                            @else
                                            <button class="btn btn-outline-info btn-sm" type="button" id="button-addon1">
                                                <i class="bi bi-check"></i> Done
                                            </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- content-footer -->
                <footer class="content-footer">
                    <div><a href="https://cakeadmin.com" target="_blank">X10Aibots</a> © 2023</div>
                    <div>
                        <nav class="nav gap-4">
                            <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                            <a href="#" class="nav-link">Change Log</a>
                            <a href="#" class="nav-link">Get Help</a>
                        </nav>
                    </div>
                </footer>
            </div>
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
