@foreach ($sliders as $slider)
    <!-- Modal -->
    <div class="modal fade" id="editslider-{{ $slider->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Slider</h5>
                </div>
                <form action="/dashboard/data-slider/{{ $slider->id }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <main class="form-signin w-100 m-auto">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="nama_slider">Judul</label>
                                <input type="text" class="form-control @error('nama_slider') is-invalid @enderror"
                                    name="nama_slider" id="nama_slider" required autofocus
                                    value="{{ old('nama_slider', $slider->nama_slider) }}">
                                @error('nama_slider')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control  @error('gambar') is-invalid @enderror"
                                    name="gambar" id="gambar">
                                @error('gambar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" cols="5" rows="5"
                                    class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $slider->deskripsi) }}</textarea>
                                @error('deskripsi')
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
@endforeach
