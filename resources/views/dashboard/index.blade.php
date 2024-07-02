@extends('dashboard.layouts.app')
@section('container')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-md-flex align-items-center mb-3 mx-2">
                    <div class="mb-md-0 mb-3">
                        <h3 class="font-weight-bold mb-0">Selamat Datang {{ auth()->user()->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0">
        <div class="row mt-4">
            {{-- pegawai jumlah --}}
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-lg mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Jumlah Wali Murid</p>
                                    <h4 class="mb-2 font-weight-bold">0</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- pegawai hadir --}}
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-lg mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">

                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Jumlah Murid</p>
                                    <h4 class="mb-2 font-weight-bold">0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- pegawai terlambat --}}
            <div class="col-xl-3 col-sm-6 mb-xl-0">
                <div class="card border shadow-lg mb-4">
                    <div class="card-body text-start p-3 w-100">
                        <div
                            class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20"
                                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" />
                            </svg>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="w-100">
                                    <p class="text-sm text-secondary mb-1">Jumlah Guru</p>
                                    <h4 class="mb-2 font-weight-bold">0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="card shadow-lg border">

                    <div class="card-body">
                        <div class="align-self-center">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                themeSystem: 'bootstrap5',
                timeZone: 'local',
                locale: 'id',
                headerToolbar: {
                    end: 'prevYear,prev,today,next,nextYear'
                },
                buttonText: {
                    today: 'Hari Ini',
                },

                dayCellDidMount: function(info) {
                    var today = new Date();
                    var cellDate = info.date.getDate();
                    var cellMonth = info.date.getMonth();
                    var cellYear = info.date.getFullYear();

                    if (cellDate === today.getDate() && cellMonth === today.getMonth() && cellYear ===
                        today.getFullYear()) {
                        var cell = info.el;
                        cell.style.backgroundColor =
                            'rgba(0, 0, 0, 0.5)'; // Ubah warna latar belakang menjadi kuning untuk hari ini
                    }
                },

            });
            calendar.render();

        });
    </script>
@endsection
