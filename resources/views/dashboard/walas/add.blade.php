<!-- Modal -->
<div class="modal fade" id="addguru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Wali Kelas</h5>
            </div>
            <form action="/dashboard/data-walikelas" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <main class="form-signin w-100 m-auto">
                        @csrf
                        <div class="form-group">
                            <label for="guru_id">Guru</label>
                            <select class="form-select" name="guru_id">
                                <option disabled selected>Pilih Guru</option>
                                @foreach ($guru as $guru)
                                    @if (old('guru_id') == $guru->id)
                                        <option value="{{ $guru->id }}" selected>{{ $guru->nama }}</option>
                                    @else
                                        <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select class="form-select" name="kelas_id">
                                <option disabled selected>Pilih Kelas</option>
                                @foreach ($kelas as $item)
                                    @if (old('kelas_id') == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
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
