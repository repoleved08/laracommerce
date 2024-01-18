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
            <div class="content ">
                @if (session()->has('message'))
                    <div class="alert alert-success">

                        {{ session()->get('message') }}

                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                    </div>
                @endif

                <div class="cols row-cols-1 row-cols-md-3 g-4">
                    <h4 class="mb-3">Add Category</h4>

                    <form action=" {{ url('/add_category') }} " method="post">
                        @csrf
                        <label class="mb-3" for="categoryName">Name</label> <br>
                        <input type="text" placeholder="Add Category" class="mb-3" name="cat_name">

                        <input type="submit" value="Add Category" class="btn btn-secondary text-black">
                    </form>

                </div>
            </div>
            <!-- ./ content -->



            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0 mr-4" id="products">
                    <thead>
                        <tr>
                            <th>
                                <input class="form-check-input select-all" type="checkbox"
                                    data-select-all-target="#products" id="defaultCheck1">
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#{{$data->id}}</a>
                            </td>
                            <td>{{$data->cat_name}}</td>
                            
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->updated_at}}</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a onclick="return confirm("Are you sure you want to delete?")" href="{{url('delete_cat', $data->id)}}" class="dropdown-item text-red-600">Delete</a>
                                            {{-- <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
