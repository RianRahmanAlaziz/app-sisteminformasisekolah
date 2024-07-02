@extends('dashboard.layouts.app')
@section('container')
    <div class="container-fluid py-4 px-5">

        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="mt-5 mb-5 row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="card card-body " id="profile">

                        <div class="row z-index-2 justify-content-left align-items-left ">
                            <div class="col-sm-auto col-4">
                                <div class="avatar avatar-xl position-relative">
                                    <img src="../assets/img/team-2.jpg" alt="bruce"
                                        class="w-100 h-100 object-fit-cover border-radius-lg shadow-sm" id="preview">
                                </div>
                            </div>
                            <div class="col-sm-auto col-8 my-auto">
                                <div class="h-100">
                                    <h5 class="mb-1 font-weight-bolder">
                                        {{ auth()->user()->nama }}
                                    </h5>
                                    <p class="mb-0 font-weight-bold text-sm">
                                        {{ auth()->user()->getRoleNames()->first() }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert" id="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert" id="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="mb-5 row justify-content-center">
                <div class="col-lg-9 col-12 ">
                    <div class="card " id="basic-info">
                        <div class="card-header">
                            <h5>Basic Info</h5>
                        </div>
                        <div class="pt-0 card-body">

                            <div class="row">
                                <div class="col-6">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" id="name"
                                        value="{{ old('name', auth()->user()->nama) }}" class="form-control">
                                    @error('name')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email"
                                        value="{{ old('email', auth()->user()->email) }}" class="form-control">
                                    @error('email')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="location">Lokasi</label>
                                    <input type="text" name="location" id="location" placeholder="Bucharest, Romania"
                                        value="{{ old('location', auth()->user()->location) }}" class="form-control">
                                    @error('location')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="phone">No HP</label>
                                    <input type="text" name="phone" id="phone" placeholder="0733456987"
                                        value="{{ old('phone', auth()->user()->phone) }}" class="form-control">
                                    @error('phone')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row p-2">
                                <label for="about">Tentang Saya</label>
                                <textarea name="about" id="about" rows="5" class="form-control">{{ old('about', auth()->user()->about) }}</textarea>
                                @error('about')
                                    <span class="text-danger text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="mt-6 mb-0 btn btn-outline-dark btn-sm float-end">Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
@endsection
