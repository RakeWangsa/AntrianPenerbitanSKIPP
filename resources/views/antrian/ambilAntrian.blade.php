@extends('layouts.main')

@section('container')
    <div class="row dashboard">
        <div class="alert alert-info alert-dismissible fade show mt-3 justify-content-center col-md-12" role="alert"> <i class="bi bi-info-circle me-1"></i> 
            Silahkan pilih jenis antrian dibawah ini untuk mendapatkan nomor antrian dengan mengisikan nomor pengajuan PPK terlebih dahulu.
            Apabila belum memiliki nomor PPK silahkan memilih layanan konsultasi. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
    </div>
    <section class="section dashboard">
        <div class="row mt-3">
            <div class="card col-md-12">
                <div class="card-body">
                    <div class="mt-4">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                    <form class="row g-3 mt-3" method="GET" action="{{route('ambilantrian')}}">
                        <div class="col-md-12"> <label for="noppk" class="form-label">Masukkan Nomor Pengajuan PPK</label> <input type="text" class="form-control" id="noppk" name="noppk" value="{{ old('noppk') }}"></div>
                        <div class="col-md-12">
                            <label for="jenislayanan" class="form-label">Pilih Jenis Layanan</label> 
                            <select id="jenislayanan" class="form-select" name="jenislayanan">
                                <option>Pilih Jenis Layanan!</option>
                                <option value="karantina">Karantina</option>
                                <option value="mutu">Mutu</option>
                                <option value="cs">Customer Service</option>
                            </select>
                        </div>
                        <div class="text-center mb-5 mt-4"> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-secondary">Reset</button></div>
                    </form>
                </div>
            </div> 
        </div>
    </section>
@endsection