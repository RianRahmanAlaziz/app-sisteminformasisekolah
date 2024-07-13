<!-- Modal -->
<div class="modal fade" id="addguru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Siswa</h5>
            </div>
            <form action="/dashboard/data-siswa" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <main class="form-signin w-100 m-auto">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" required autofocus value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="password" readonly placeholder="Password default 112233">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" id="nama" required autofocus value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="n_ortu">Nama Wali Siswa</label>
                                    <input type="text" class="form-control @error('n_ortu') is-invalid @enderror"
                                        name="n_ortu" id="n_ortu" required autofocus value="{{ old('n_ortu') }}">
                                    @error('n_ortu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kelas_id">Kelas</label>
                                    <select class="form-select" name="kelas_id">
                                        <option disabled selected>Pilih Kelas</option>
                                        @foreach ($kelas as $item)
                                            @if (old('kelas_id') == $item->id)
                                                <option value="{{ $item->id }}" selected>{{ $item->nama }}
                                                </option>
                                            @else
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_hp">No Telepon Wali Siswa</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                        <input type="tel" class="form-control @error('no_hp') is-invalid @enderror"
                                            name="no_hp" id="no_hp" required autofocus
                                            value="{{ old('no_hp') }}" maxlength="13" placeholder="812-3456-7891">
                                    </div>
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gambar">Foto Siswa</label>
                                    <input type="file" class="form-control  @error('gambar') is-invalid @enderror"
                                        name="gambar" id="gambar">
                                    @error('gambar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f_ortu">Foto Wali Siswa</label>
                                    <input type="file" class="form-control  @error('f_ortu') is-invalid @enderror"
                                        name="f_ortu" id="f_ortu">
                                    @error('f_ortu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="" cols="5" rows="5"
                                class="form-control @error('alamat') is-invalid @enderror"></textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </main>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
