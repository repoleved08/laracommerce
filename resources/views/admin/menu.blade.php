<div class="menu">
    <div class="menu-header">
        <a href="admin/pages/dashboard.html" class="menu-header-logo">
            <img src="admin/logo.svg" alt="logo">
            <span>CakeAdmin</span>
        </a>
        <a href="#" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="admin/images/user/man_avatar5.jpg" class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">Ti Bendan</div>
                    <small class="text-muted">Admin</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
                <a href="admin/pages/login.html" class="dropdown-item d-flex align-items-center text-danger"
                    target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
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
                        <a href="admin/orders.html">List</a>
                    </li>
                    <li>
                        <a href="admin/order-detail.html">Detail</a>
                    </li>
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
                        <a href="{{url('view_product')}}">Add Product</a>
                    </li>
                    <li>
                        <a href="admin/product-grid.html">Grid View</a>
                    </li>
                    <li>
                        <a href="{{url('show_product')}}">Product Detail</a>
                    </li>
                    <li>
                        <a href="admin/shopping-cart.html">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="admin/checkout.html">Checkout</a>
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
                    <li>
                        <a href="admin/buyer-dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="admin/buyer-orders.html">Orders</a>
                    </li>
                    <li>
                        <a href="admin/buyer-addresses.html">Addresses</a>
                    </li>
                    <li>
                        <a href="admin/buyer-wishlist.html">Wishlist</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/customers.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-badge"></i>
                    </span>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Invoices</span>
                </a>
                <ul>
                    <li>
                        <a href="admin/invoices.html">List</a>
                    </li>
                    <li>
                        <a href="admin/invoice-detail.html">Detail</a>
                    </li>
                </ul>
            </li>
            <li class="menu-divider">Apps</li>
            <li>
                <a href="admin/chats.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-chat-square"></i>
                    </span>
                    <span>Chats</span>
                    <span class="badge bg-success rounded-circle ms-auto">2</span>
                </a>
            </li>
            <li>
                <a href="admin/email.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <span>Email App</span>
                </a>
                <ul>
                    <li>
                        <a href="admin/email.html">
                            <span>Inbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin/email.html-detail">
                            <span>Detail</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/todo-list.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-check-circle"></i>
                    </span>
                    <span>Todo App</span>
                </a>
                <ul>
                    <li>
                        <a href="admin/todo-list.html">
                            <span>List</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin/todo-detail.html">
                            <span>Details</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-divider">Pages</li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person"></i>
                    </span>
                    <span>Profile</span>
                </a>
                <ul>
                    <li>
                        <a href="admin/profile-posts.html">Post</a>
                    </li>
                    <li>
                        <a href="admin/profile-connections.html">Connections</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-circle"></i>
                    </span>
                    <span>Users</span>
                </a>
                <ul>
                    <li>
                        <a href="admin/user-list.html">List View</a>
                    </li>
                    <li>
                        <a href="admin/user-grid.html">Grid View</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-lock"></i>
                    </span>
                    <span>Authentication</span>
                </a>
                <ul>
                    <li>
                        <a href="admin/login.html" target="_blank">Login</a>
                    </li>
                    <li>
                        <a href="admin/register.html" target="_blank">Register</a>
                    </li>
                    <li>
                        <a href="admin/reset-password.html" target="_blank">Reset Password</a>
                    </li>
                    <li>
                        <a href="admin/lock-screen.html" target="_blank">Lock Screen</a>
                    </li>
                    <li>
                        <a href="admin/account-verified.html" target="_blank">Account Verified</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-exclamation-octagon"></i>
                    </span>
                    <span>Error Pages</span>
                </a>
                <ul>
                    <li>
                        <a href="admin/404.html" target="_blank">404</a>
                    </li>
                    <li>
                        <a href="admin/access-denied.html">Access Denied</a>
                    </li>
                    <li>
                        <a href="admin/under-construction.html" target="_blank">Under Construction</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin/settings.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-gear"></i>
                    </span>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="admin/pricing-table.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Pricing Table</span>
                    <span class="badge bg-success ms-auto">New</span>
                </a>
            </li>
            <li>
                <a href="admin/search-page.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-search"></i>
                    </span>
                    <span>Search Page</span>
                </a>
            </li>
            <li>
                <a href="admin/faq.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-question-circle"></i>
                    </span>
                    <span>FAQ</span>
                </a>
            </li>
            <li class="menu-divider">Other</li>
            <li>
                <a target="_blank" href="https://cakeadmin.com/bootstrap-docs/introduction">
                    <span class="nav-link-icon">
                        <i class="bi bi-file-earmark-medical"></i>
                    </span>
                    <span>Documentation</span>
                </a>
                <a target="_blank" href="https://github.com/bundui/cakeadmin">
                    <span class="nav-link-icon">
                        <i class="bi bi-github"></i>
                    </span>
                    <span>CakeAdmin Github</span>
                </a>
                <a target="_blank" href="https://cakeadmin.com">
                    <span class="nav-link-icon">
                        <i class="bi bi-file-person"></i>
                    </span>
                    <span>CakeAdmin About</span>
                </a>
                <a target="_blank" href="https://cakeadmin.com/contact">
                    <span class="nav-link-icon">
                        <i class="bi bi-person-raised-hand"></i>
                    </span>
                    <span>Support</span>
                </a>
            </li>
        </ul>
    </div>
</div>
