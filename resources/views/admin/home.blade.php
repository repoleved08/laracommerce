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
            @include('admin.content')
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
