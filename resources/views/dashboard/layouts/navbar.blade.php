<nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded position-sticky mt-4 left-auto top-1 z-index-sticky bg-gradient-dark"
    id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb text-white">
            <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ $title }}</li>
            </ol>
            <h6 class="font-weight-bold mb-0 text-white">{{ $title }}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            </div>

            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>

                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="#fff" class="cursor-pointers">
                            <path fill-rule="evenodd"
                                d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                clip-rule="evenodd" />
                            <span class="badge bg-primary"></span>

                        </svg>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                        aria-labelledby="dropdownMenuButton">
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal">
                                            Tidak Ada Notification
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item dropdown ps-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="a" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="/assets/img/team-2.jpg" class="avatar avatar-sm" alt="avatar" />
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="a">
                        <li class="mb-2">
                            <a href="/" class="dropdown-item border-radius-md"><i class="fa-solid fa-house"></i>
                                Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="/dashboard/user-profil" class="dropdown-item border-radius-md"><i
                                    class="fa-solid fa-user"></i>
                                Profil</a>
                        </li>
                        <li class="mb-2">
                            <button class=" dropdown-item border-radius-md" type="button" data-bs-toggle="modal"
                                data-bs-target="#logoutModal">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                Log Out
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Logout?</h5>
            </div>
            <div class="modal-footer">
                <button class="btn btn-white" type="button" data-bs-dismiss="modal">Cancel</button>
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn btn-dark" type="submit">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
