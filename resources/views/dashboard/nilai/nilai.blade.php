@extends('dashboard.layouts.app')
@section('container')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-lg mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Rekap Nilai</h6>
                                <p class="text-sm"></p>
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="/dashboard/input-nilai" type="button"
                                    class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                    <span class="btn-inner--icon">
                                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                                            <path
                                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                                        </svg>
                                    </span>
                                    <span class="btn-inner--text">Input Nilai</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">
                        <form action="{{ url()->current() }}" method="get">
                            <div class="border-bottom py-3 px-3 d-sm-flex align-items-center">
                                <div class="input-group w-sm-25 ms-auto">
                                    <span class="input-group-text text-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" name="search" id="search" class="form-control"
                                        value="{{ request('search') }}" placeholder="Search">
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive p-0">
                            <table class="table table-hover align-items-center mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th rowspan="2" class="text-secondary text-xs font-weight-semibold opacity-7"
                                            width="5%">No
                                        </th>
                                        <th colspan="{{ count($pelajarans) }}"
                                            class="text-secondary text-center text-xs font-weight-semibold opacity-7 ps-2">
                                            Mata
                                            Pelajaran
                                        </th>
                                    </tr>
                                    <tr>
                                        @foreach ($pelajarans as $p)
                                            <th class="text-secondary text-center text-xs font-weight-semibold opacity-7">
                                                {{ $p->nama }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($siswa as $index => $item)
                                        <tr>
                                            <td class="text-center align-middle text-secondary text-sm font-weight-normal">
                                                {{ ($siswa->currentPage() - 1) * $siswa->perPage() + $loop->iteration }}
                                            </td>
                                            @foreach ($pelajarans as $p)
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-sm font-weight-normal">
                                                        {{ optional($nilai->where('siswa_id', $item->id)->where('pelajaran_id', $p->id)->first())->nilai ?? '-' }}
                                                    </span>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="{{ count($pelajarans) + 2 }}"
                                                class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                Data Kosong
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="border-top py-3 px-3 d-flex align-items-center">
                            <p class="font-weight-semibold mb-0 text-dark text-sm">
                                Page {{ $siswa->currentPage() }} of {{ $siswa->lastPage() }}
                            </p>
                            <div class="ms-auto">
                                @if ($siswa->onFirstPage())
                                    <button class="btn btn-sm btn-white mb-0" disabled>Previous</button>
                                @else
                                    <a href="{{ $siswa->previousPageUrl() }}" class="btn btn-sm btn-white mb-0">Previous</a>
                                @endif

                                @if ($siswa->hasMorePages())
                                    <a href="{{ $siswa->nextPageUrl() }}" class="btn btn-sm btn-white mb-0">Next</a>
                                @else
                                    <button class="btn btn-sm btn-white mb-0" disabled>Next</button>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.nilai.edit')
@endsection
