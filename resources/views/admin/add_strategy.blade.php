
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
                    <div class="container">
                        <form action="{{ url('handle_strategy') }}" method="POST">
                            @csrf
                            <div class="form-group col-md-8">
                                <label for="exampleInputEmail1">Strategy Name</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Title">
                               
                            </div>
                            <div class="form-group col-md-8">
                                <label for="exampleInputPassword1">Short Description</label>
                                <textarea type="text" class="form-control" name="short_description" id="editor" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group col-md-8 mb-3">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="Price">
                            </div>
                            <div class="form-group col-md-8 mb-3">
                                <label for="exampleInputPassword1">Telegram Link</label>
                                <input type="text" class="form-control" name="telegram_link" placeholder="Telegram Link">
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="inputState" class="form-label">Strategy Category</label>
                                <select id="inputState" name="category" class="form-select">
                                    <option selected>Choose Bot</option>
                                    @foreach ($category as $category)
                                        <option value="{{ $category->cat_name }}">{{$category->id}} .  {{ $category->cat_name }} </option>
                                    @endforeach

                                </select>
                            </div>
                           
                            <input type="submit" class="btn btn-primary mb-4" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <!-- ./ content -->

            <!-- content-footer -->
            <footer class="content-footer">
                <div><a href="#" target="_blank">X10aibots.com</a> © 2024</div>
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

        <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

        <script>
            ClassicEditor.create(document.getElementById('editor'))
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor.create(document.getElementById('bodye'))
                .catch(error => {
                    console.error(error);
                });
        </script>

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
