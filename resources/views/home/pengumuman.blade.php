@extends('home.layouts.app')
@section('container')
    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="event-title">Pengumuman</h2>
                </div>
                <div class="col-md-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item nav-tab1">
                            <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events"
                                role="tab">Pengumuman Terbaru </a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="event-date">
                                        <h4>15</h4> <span>02 - 2001</span>
                                    </div>
                                    <span class="event-time">07:00</span>
                                </div>
                                <div class="col-md-10">
                                    <div class="event-heading">
                                        <h3>PPDB</h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, nesciunt!
                                            Deleniti autem accusantium provident eveniet molestiae aliquam quas tenetur, qui
                                            placeat. Culpa, repellat. Porro veniam aliquid aspernatur animi, quam
                                            cupiditate!</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="event-underline">
                        </div>
                        {{-- <div class="col-md-12 text-center">
                            <div class="pagging text-center">
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><span class="page-link"></span></li>
                                        <li class="page-item"><span class="page-link"></span><span
                                                class="sr-only">(current)</span></span></li>
                                        <li class="page-item"><span class="page-link"><span
                                                    aria-hidden="true">&raquo;</span></span></li>
                                        <li class="page-item"><span class="page-link"></span>Next</li>
                                        <li class="page-item"><span class="page-link"></span></li>
                                        <li class="page-item"><span class="page-link"></span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
