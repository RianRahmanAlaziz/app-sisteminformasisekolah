@extends('home.layouts.app')
@section('container')
    <section>
        <div class="slider_img layout_two">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach ($slider as $key => $slider)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img class="d-block" src="/assets/img/slider/{{ $slider->gambar }}"
                                alt="Slide {{ $key + 1 }}" style="width: 2000px; height: 550px !important;">
                            <div class="carousel-caption d-md-block">
                                <div class="slider_title">
                                    <h1>{{ $slider->nama_slider }}</h1>
                                    <h4>{!! nl2br(e($slider->deskripsi)) !!}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--//END HEADER -->
    <!--============================= ABOUT =============================-->
    <section class="clearfix about about-style2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Welcome</h2>
                    <p>Kami Menyambut baik terbitnya Website TK Nurul Ilmi yang baru , dengan
                        harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada
                        siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. </p>

                </div>
                <div class="col-md-4">
                    <img src="theme/img/ss.png" class="img-fluid about-img" alt="#">
                </div>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->
    <!--============================= OUR COURSES =============================-->
    {{-- <section class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Artikel Terbaru</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap">
                            <img src="" class="img-fluid" alt="courses-img">
                        </div>
                        <!-- // end .course-img-wrap -->
                        <a href="" class="course-box-content">
                            <h3 style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sint odio laboriosam cupiditate soluta, officia, quisquam facilis reprehenderit cum
                                nobis voluptate quae! Possimus fuga, harum reiciendis deleniti error molestiae non
                                corporis.</h3>
                        </a>
                    </div>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="" class="btn btn-default btn-courses">View More</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!--//END OUR COURSES -->
    <!--============================= EVENTS =============================-->
    {{-- <section class="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-img2">
                        <div class="row">
                            <div class="col-sm-3"> <img src="/assets/img/announcement-icon.png" class="img-fluid"
                                    alt="event-img">
                            </div><!-- // end .col-sm-3 -->
                            <div class="col-sm-9">
                                <h3><a href="#">sfgsdgsd</a></h3>
                                <span>28-02-2001</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laboriosam deleniti
                                    possimus, laudantium ipsam consequatur corporis ex autem nobis ipsa eius tenetur
                                    sapiente similique quae nisi, consectetur ad magni pariatur!</p>
                            </div><!-- // end .col-sm-7 -->
                        </div><!-- // end .row -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p>02</p>
                                    <span>02-2001</span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3><a href="">agenda></a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque omnis perferendis
                                    possimus accusamus, ipsum aut quia culpa minima, officiis, eligendi minus dolores
                                    iusto quos quidem optio reprehenderit quo corporis a.</p>
                                <hr class="event_line">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    <!--//END EVENTS -->
@endsection
