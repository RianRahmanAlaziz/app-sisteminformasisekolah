<div data-toggle="affix">
    <div class="container nav-menu2">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button"
                        data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="icon-menu"></span>
                    </button>
                    <a href="/" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;"
                            src="/assets/img/lg.png"></a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pengumuman">Pengumuman</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link" href="">Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Agenda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Download</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Gallery</a>
                            </li>
                         --}}

                            <li class="nav-item">
                                @if (Auth::check())
                                    <a class="nav-link" href="/dashboard">Dashboard</a>
                                @else
                                    <a class="nav-link" href="" data-toggle="modal"
                                        data-target="#login">Login</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
@include('home.login.modal')
