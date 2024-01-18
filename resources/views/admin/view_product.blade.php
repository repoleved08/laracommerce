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
                    <div class="card">
                        <div class="row g-0">
                            <div class="col">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="ltf-block-logo d-block d-lg-none text-center text-lg-start">
                                            <img width="60" src="admin/logo.svg" alt="logo">
                                        </div>
                                        <div class="my-5 text-center text-lg-start">
                                            <h1 class="display-8">Create Account</h1>
                                            <p class="text-muted">You can create a free account now</p>
                                        </div>
                                        <form action="{{ url('/add_product') }}" method="POST" class="mb-5">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Enter fullname"
                                                    autofocus required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="email" class="form-control" placeholder="Enter email"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="password" class="form-control" placeholder="Enter password"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="password" class="form-control"
                                                    placeholder="Re-enter password" required>
                                            </div>
                                            <div class="text-center text-lg-start">
                                                <button class="btn btn-primary">Sign Up</button>
                                            </div>
                                        </form>
                                        <div class="social-links justify-content-center">
                                            <a href="#">
                                                <i class="bi bi-google bg-google"></i> Sign in with Google
                                            </a>
                                            <a href="#">
                                                <i class="bi bi-facebook bg-facebook"></i> Sign in with Facebook
                                            </a>
                                        </div>
                                        <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                            Don't have an account? <a href="#">Sign In</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                                <div class="logo">
                                    <img width="60" src="../logo.svg" alt="logo">
                                </div>
                                <div>
                                    <h3 class="fw-bold">Welcome to CakeAdmin!</h3>
                                    <p class="lead my-5">Do you already have an account?</p>
                                    <a href="#" class="btn btn-primary">Sign In</a>
                                </div>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
