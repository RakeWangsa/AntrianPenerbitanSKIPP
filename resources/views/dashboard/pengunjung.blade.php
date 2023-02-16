@extends('layouts.main')

@section('container')
    <div class="pagetitle mt-3">
        <h1>Dashboard</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        </nav>
    </div>
    <div class="pagetitle mt-3">
        <div class="alert alert-info alert-dismissible fade show" role="alert"> <i class="bi bi-info-circle me-1"></i> Selamat Datang di <b>Aplikasi Antrian Pengunjung.</b> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
    </div>
    <section class="section dashboard">
        <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card no-card">
                        <div class="time">
                            <p id="current-time"></p>
                        </div>
                        <script>
                            let time = document.getElementById("current-time");

                            setInterval(() => {
                                let d = new Date();
                                time.innerHTML = d.toLocaleTimeString();
                            }, 1000);
                        </script>
                    </div>
                    <div class="card info-card no-card">
                        <div class="calendar">
                            <p id="namaBulan"></p>
                            <p id="namaHari"></p>
                            <p id="tanggal"></p>
                            <p id="tahun"></p>
                            <script type="text/javascript">
                                const lang = navigator.language;
                                let date = new Date();

                                let tanggal = date.getDate();
                                let bulan = date.getMonth();
                                let namaHari = date.toLocaleString(lang,{weekday:'long'});
                                let namaBulan = date.toLocaleString(lang,{month:'long'});
                                let tahun = date.getFullYear();

                                document.getElementById('namaBulan').innerHTML = namaBulan;
                                document.getElementById('namaHari').innerHTML = namaHari;
                                document.getElementById('tanggal').innerHTML = tanggal;
                                document.getElementById('tahun').innerHTML = tahun;
                            </script>
                        </div>
                    </div>
                    <div class="card info-card no-card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Antrian <span>| Hari ini</span></h5>
                            <div id="trafficChart" style="min-height: 280px;" class="echart"></div>
                            <script>document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    top: '0%',
                                    left: 'center'
                                },
                                series: [{
                                    name: 'Antrian',
                                    type: 'pie',
                                    radius: ['40%', '70%'],
                                    avoidLabelOverlap: false,
                                    label: {
                                    show: false,
                                    position: 'center'
                                    },
                                    emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '18',
                                        fontWeight: 'bold'
                                    }
                                    },
                                    labelLine: {
                                    show: false
                                    },
                                    data: [{
                                        value: 1048,
                                        name: 'Karantina'
                                    },
                                    {
                                        value: 735,
                                        name: 'Mutu'
                                    },
                                    {
                                        value: 300,
                                        name: 'Customer Service'
                                    }
                                    ]
                                }]
                                });
                                });
                            </script> 
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-md-8">
                    <div class="card-body mt-1">
                        <div class="d-flex align-items-center responsive-embed-youtube">
                            <iframe src="https://www.youtube.com/embed/brVjycsfvmY?controls=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                        </div>

                        <div class="row">
                            <div class="col-xxl-8 col-md-6">
                                <div class="card info-card2 no-card">
                                    <div class="card-body2">
                                        <h5 class="card-title text-center">Antrian Karantina Saat Ini</h5>
                                        <p id="kode">K1</p>
                                    </div>
                                </div>
                                <div class="card info-card2 no-card">
                                    <div class="card-body2">
                                        <h5 class="card-title text-center">Antrian Mutu Saat Ini</h5>
                                        <p id="kode">M1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card2 no-card">
                                    <div class="card-body2">
                                        <h5 class="card-title text-center">Antrian CS Saat Ini</h5>
                                        <p id="kode">CS1</p>
                                    </div>
                                </div>
                                <div class="card info-card2 no-card">
                                    <div class="card-body2">
                                        <h5 class="card-title text-center">Ambil Nomor Antrian</h5>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bx bxs-add-to-queue"></i></div>
                                            <div class="ps-3">
                                                <a href="/ambil/antrian" class="text-dark large text-bold">Pilih disini </a><i class="bi bi-chevron-double-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                     
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection