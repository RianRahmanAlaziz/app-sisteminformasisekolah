@extends('home.layouts.app')
@section('container')
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                                <div class="contact-option_rsp">
                                    <h3>Tinggalkan Pesan</h3>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama" name="xnama"
                                                required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="xemail"
                                                required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Telepon" name="xphone"
                                                required>
                                        </div>
                                        <!-- // end .form-group -->
                                        <div class="form-group">
                                            <textarea placeholder="Pesan" class="form-control" name="xmessage" required rows="5"></textarea>
                                        </div>
                                        <!-- // end .form-group -->
                                        <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                                        <div></div>
                                        <!-- // end #js-contact-result -->
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="contact-address">
                                    <h3>Lokasi</h3>
                                    <div class="contact-details">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <h6>Alamat</h6>
                                        <p> Jl. M Amin Fauzi Perum Al-Baria Blok C No.07
                                            <br> Kecamatan Gandus,
                                            <br> Kota Palembang
                                        </p>

                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p>tknurulilmi06@gmail.com
                                            <br> www.tknurulilmi.id
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Telepon</h6>
                                        <p>+62 8117196655</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>
@endsection
