@extends('layouts.main')

@section('container')
    <div class="pagetitle mt-3">
        <h1>Dashboard</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Operator</li>
        </ol>
        </nav>
    </div>
    
    <div class="col-lg-12">
        <div class="col-xxl-12 col-md-12">
            <div class="card info-card mic-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="card-icon2 rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-mic-fill" style="color: #012970;"></i></div>
                        <div class="pt-2 ps-2">
                           <h5 class="fw-bold" style="color: #012970;">Panggilan Antrian</h5>
                        </div>
                    </div>
                </div>
            </div>              
        </div>           
    </div>
    <div class="row">
        <div class="col-xxl-3 col-md-3">
            <div class="card info-card ja-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-people" style="color: #4154f1; font-size: 70px;"></i></div>
                       <div class="ps-4 mt-4 mb-4">
                          <h5 style="color: #4154f1; font-weight: 700; font-size: 30px;">1244</h5>
                          <span class="small pt-1 fw-bold">Jumlah Antrian</span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-3">
            <div class="card info-card as-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-person-check" style="color: #2eca6a; font-size: 70px;"></i></div>
                       <div class="ps-4 mt-4 mb-4">
                          <h5 style="color: #2eca6a; font-weight: 700; font-size: 30px;">1244</h5>
                          <span class="small pt-1 fw-bold">Antrian Sekarang</span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-3">
            <div class="card info-card asl-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-person-plus" style="color: #ff771d; font-size: 70px;"></i></div>
                       <div class="ps-4 mt-4 mb-4">
                          <h5 style="color: #ff771d; font-weight: 700; font-size: 30px;">1244</h5>
                          <span class="small pt-1 fw-bold">Antrian Selanjutnya</span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-3">
            <div class="card info-card sa-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                       <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-person" style="color: #eb3d34; font-size: 70px;"></i></div>
                       <div class="ps-4 mt-4 mb-4">
                          <h5 style="color: #eb3d34; font-weight: 700; font-size: 30px;">1244</h5>
                          <span class="small fw-bold">Sisa Antrian</span>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-12 col-md-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Panggil Antrian</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No Antrian</th>
                            <th scope="col" class="text-center">Panggil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align: center">
                            <td>Brandon Jacob</td>
                            <td>
                                <a class="btn btn-success" style="border-radius: 100px;" a href="#"><i class="bi bi-telephone"></i></a>
                                <a class="btn btn-warning" style="border-radius: 100px;" a href="#"><i class="bi bi-telephone-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>  
@endsection