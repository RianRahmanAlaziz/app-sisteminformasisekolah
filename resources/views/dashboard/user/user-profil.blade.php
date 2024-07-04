@extends('dashboard.layouts.app')
@section('container')
    <div class="container-fluid py-4 px-5">
        <div class="mt-5 mb-5 row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="card card-body " id="profile">

                    <div class="row z-index-2 justify-content-left align-items-left ">
                        <div class="col-sm-auto col-4">
                            <div class="avatar avatar-xl position-relative">
                                <img src="../assets/img/guru/{{ auth()->user()->guru->gambar }}" alt="bruce"
                                    class="w-100 h-100 object-fit-cover border-radius-lg shadow-sm" id="preview">
                            </div>
                        </div>
                        <div class="col-sm-auto col-8 my-auto">
                            <div class="h-100">
                                <h5 class="mb-1 font-weight-bolder">
                                    {{ auth()->user()->name }}
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
        <div class="mb-5 row justify-content-center">
            <div class="col-lg-9 col-12 ">
                <div class="card " id="basic-info">
                    <div class="card-header">
                        <h5>Basic Info</h5>
                    </div>
                    <div class="pt-0 card-body">
                        <form action="/dashboard/updateprofil/{{ auth()->user()->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama"
                                        value="{{ old('nama', auth()->user()->name) }}" class="form-control">
                                    @error('nama')
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
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" placeholder="Bucharest, Romania"
                                        value="{{ old('alamat', auth()->user()->guru->alamat) }}" class="form-control">
                                    @error('alamat')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" id="no_hp" placeholder="0733456987"
                                        value="{{ old('no_hp', auth()->user()->guru->no_hp) }}" class="form-control">
                                    @error('no_hp')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    @error('password')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <span class="text-secondary text-sm font-weight-normal">*Kosongkan Password jika tidak ingin
                                di Ganti</span>
                            <button type="submit" class="mt-6 mb-0 btn btn-outline-dark btn-sm float-end">Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
