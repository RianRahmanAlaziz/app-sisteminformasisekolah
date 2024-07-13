@extends('dashboard.layouts.app')
@section('container')
    <div class="container-fluid py-4 px-5">
        <form action="/dashboard/input-nilai" method="POST">
            @csrf
            <div class="row my-4">
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <div class="card shadow-xs border h-100">
                        <div class="card-header pb-0">
                            <h6 class="font-weight-semibold text-lg mb-0">Pilih Siswa</h6>
                        </div>
                        <div class="card-body py-3">
                            <div class="form-group">
                                <label for="kelas_id">Kelas</label>
                                <select class="form-select" name="kelas_id" id="kelas_id" required>
                                    <option disabled selected>Pilih Kelas</option>
                                    @foreach ($kelas as $kls)
                                        @if (old('kelas_id') == $kls->id)
                                            <option value="{{ $kls->id }}" selected>{{ $kls->nama }}</option>
                                        @else
                                            <option value="{{ $kls->id }}">{{ $kls->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="siswa_id">Siswa</label>
                                <select class="form-select" name="siswa_id" id="siswa_id" required>
                                    <option disabled selected>Pilih Siswa</option>
                                    @foreach ($siswa as $item)
                                        @if (old('siswa_id') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="card shadow-xs border">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">Input Nilai</h6>
                                </div>
                                <div class="ms-auto d-flex">
                                    <button type="submit"
                                        class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                        <span class="btn-inner--icon">
                                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                                                <path
                                                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">Input Nilai</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="table-responsive p-0">
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
                                        @forelse ($pelajaran as $item)
                                            <tr>
                                                <td
                                                    class="text-center align-middle text-secondary text-sm font-weight-normal">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="align-middle">
                                                    <span class="text-secondary text-sm font-weight-normal">
                                                        {{ $item->nama }}
                                                        <input name="pelajaran_id[]" type="hidden"
                                                            value="{{ $item->id }}">
                                                    </span>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="text-secondary text-sm font-weight-normal"> <input
                                                            name="nilai[]" id="nilai" class="form-control text-center"
                                                            type="number" placeholder="0" min="0" max="100"
                                                            step="5" required>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#kelas_id').change(function() {
            var kelasID = $(this).val();
            if (kelasID) {
                $.ajax({
                    url: '/getSiswa/' + kelasID,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('#siswa_id').empty();
                        $('#siswa_id').append(
                            '<option disabled selected>Pilih Siswa</option>');
                        $.each(data, function(key, value) {
                            $('#siswa_id').append('<option value="' + value.id +
                                '">' + value.nama + '</option>');
                        });
                    }
                });
            } else {
                $('#siswa_id').empty();
                $('#siswa_id').append('<option disabled selected>Pilih Siswa</option>');
            }
        });

        // $('#siswa_id').change(function() {
        //     var siswaID = $(this).val();
        //     if (siswaID) {
        //         $.ajax({
        //             url: '/getNilai/' + siswaID,
        //             type: "GET",
        //             dataType: "json",
        //             success: function(data) {
        //                 console.log(data);
        //                 var tableBody = $('table tbody');
        //                 tableBody.empty();
        //                 if (data.length > 0) {
        //                     $.each(data, function(index, value) {
        //                         var row = `<tr>
        //                         <td class="text-center align-middle text-secondary text-sm font-weight-normal">${index + 1}</td>
        //                         <td class="align-middle">
        //                             <span class="text-secondary text-sm font-weight-normal">${value.pelajaran.nama}</span>
        //                         </td>
        //                         <td class="align-middle">
        //                             <span class="text-secondary text-sm font-weight-normal">${value.nilai}</span>
        //                         </td>
        //                     </tr>`;
        //                         tableBody.append(row);
        //                     });
        //                 } else {
        //                     tableBody.append(
        //                         '<tr><td colspan="3" class="text-center text-secondary text-xs font-weight-semibold opacity-7">Data Kosong</td></tr>'
        //                     );
        //                 }
        //             }
        //         });
        //     } else {
        //         $('table tbody').empty().append(
        //             '<tr><td colspan="3" class="text-center text-secondary text-xs font-weight-semibold opacity-7">Data Kosong</td></tr>'
        //         );
        //     }
        // });
    });
</script>
