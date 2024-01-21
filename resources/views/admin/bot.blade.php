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
                                            <h1 class="display-8">Add Bots</h1>

                                        </div>
                                        <form action="{{ url('/add_bot') }}" method="POST"
                                            enctype="multipart/form-data" class="row g-3">
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Product Name</label>
                                                <input type="text" class="form-control" id="inputName"
                                                    name="name">
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <label for="inputImage" class="form-label">Bot File</label>
                                                <input type="file" class="form-control " name="file"
                                                    id="inputImage" placeholder="Upload Bot">
                                            </div>

                                            <div class="text-center text-lg-start mb-5">
                                                <input type="submit" class="btn btn-primary" value="Add Bot">
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
