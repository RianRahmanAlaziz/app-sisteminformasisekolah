@foreach ($walas as $item)
    <!-- Modal -->
    <div class="modal fade" id="editpegawai-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Wali Kelas</h5>
                </div>
                <form action="/dashboard/data-walikelas/{{ $item->id }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <main class="form-signin w-100 m-auto">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="guru_id">Guru</label>
                                <select class="form-select" name="guru_id">
                                    @foreach ($guru as $gr)
                                        @if (old('guru_id', $item->guru_id) == $gr->id)
                                            <option value="{{ $gr->id }}" selected>{{ $gr->nama }}</option>
                                        @else
                                            <option value="{{ $gr->id }}">{{ $gr->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelas_id">Kelas</label>
                                <select class="form-select" name="kelas_id">
                                    @foreach ($kelas as $kl)
                                        @if (old('kelas_id', $item->kelas_id) == $kl->id)
                                            <option value="{{ $kl->id }}" selected>{{ $kl->nama }}</option>
                                        @else
                                            <option value="{{ $kl->id }}">{{ $kl->nama }}</option>
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
@endforeach
