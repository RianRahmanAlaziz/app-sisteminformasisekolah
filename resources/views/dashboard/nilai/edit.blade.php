@foreach ($siswa as $item)
    <!-- Modal -->
    <div class="modal fade" id="editnilai-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Nilai Siswa {{ $item->nama }} </h5>
                </div>
                <form action="/dashboard/input-nilai/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="modal-body">
                        <main class="form-signin w-100 m-auto">
                            <input type="text" name="siswa_id" id="siswa_id" value="{{ $item->id }}" hidden>
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7"
                                            width="5%">No
                                        </th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Nama
                                            Pelajaran</th>
                                        <th class="text-secondary text-center text-xs font-weight-semibold opacity-7 ps-2"
                                            width="20%">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pelajarans as $pjr)
                                        @php
                                            // Dapatkan nilai lama (old value) dari relasi Nilai untuk siswa dan pelajaran saat ini
                                            $nilaiLama = $item
                                                ->nilai()
                                                ->where('pelajaran_id', $pjr->id)
                                                ->first();
                                        @endphp
                                        <tr>
                                            <td
                                                class="text-center align-middle text-secondary text-sm font-weight-normal">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle">
                                                <span class="text-secondary text-sm font-weight-normal">
                                                    {{ $pjr->nama }}
                                                    <input name="pelajaran_id[]" type="hidden"
                                                        value="{{ $pjr->id }}">
                                                </span>
                                            </td>
                                            <td class="align-middle">
                                                <span class="text-secondary text-sm font-weight-normal"> <input
                                                        name="nilai[]" id="nilai" class="form-control text-center"
                                                        type="text" maxlength="1" required
                                                        style="text-transform: uppercase;"
                                                        oninput="this.value = this.value.replace(/[^ABCDEabcde]/g, '')"
                                                        value="{{ $nilaiLama ? $nilaiLama->nilai : '' }}">
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3"
                                                class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Data Kosong</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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
