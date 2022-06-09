
<div class="dashboard-main-wrapper">
<div class="nav-left-sidebar sidebar-dark">
    <!-- side bar user -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('assets')}}/admin/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle">
        </div>
        <div class="info">

            <a href="/logoutuser" class="text-uppercase">Logout</a>
        </div>
    </div>
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin"><i class="fas fa-home text-yellow-400"></i>Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-box-open text-blue-300"></i>Orders <span class="badge badge-success">6</span></a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="../dashboard-finance.html"><i class="fas fa-arrows-alt-h"></i>New Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../dashboard-sales.html"><i class="fas fa-arrows-alt-h"></i>Accepted Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../dashboard-sales.html"><i class="fas fa-arrows-alt-h"></i>Completed Orders</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/category"><i class="fas fa-align-justify text-yellow-400"></i>Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/job"><i class="fas fa-key "></i>Job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/comment"><i class="fas fa-comment-dots"></i>Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.faq.index')}}"><i class="fas fa-question"></i>FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.message.index')}}"><i class="far fa-envelope"></i>Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/image"><i class="far fa-images"></i>Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/profile"><i class="far fa-id-badge"></i>Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/user"><i class="far fa-user text-green-500"></i>User</a>
                    </li>
                    <li class="nav-header">LABELS</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/setting"><i class="fas fa-cog"></i>Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>
