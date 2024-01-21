<div class="menu">
    <div class="menu-header">
        <a href="/" class="menu-header-logo">
            <img src="admin/logo.svg" alt="logo">
            <span>X10Aibots</span>
        </a>
        <a href="#" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="" class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">GodFrey</div>
                    <small class="text-muted">Admin</small>
                </div>
            </a>
        </div>
        <ul>
            <li class="menu-divider">Dashboard</li>
            <li>
                <a class="active" href="./dashboard.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('orders') }}">List</a>
                    </li>
                    {{-- <li>
                        <a href="admin/order-detail.html">Detail</a>
                    </li> --}}
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('view_category') }}">Category</a>
                    </li>
                    <li>
                        <a href="{{ url('view_product') }}">Add Product</a>
                    </li>
                    <li>
                        <a href="{{ url('bot') }}">Add Bot</a>
                    </li>

                    <li>
                        <a href="{{ url('show_product') }}">Product Detail</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Buyer</span>
                </a>
                <ul>

                </ul>
            </li>

            <li>


            </li>
            <li class="menu-divider">Apps</li>

            <li>

                </a>
                <ul>


                </ul>
            </li>
            <li>

                <ul>


                </ul>
            </li>


            </li>
            <li>


            </li>
            <li>



            </li>


            </li>




        </ul>
    </div>
</div>
