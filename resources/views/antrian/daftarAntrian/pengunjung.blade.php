@extends('layouts.main')

@section('container')
<div class="pagetitle mt-3">
    <h1>Daftar Antrian</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Daftar Antrian</li>
    </ol>
    </nav>
</div>
<div class="row" style="margin-bottom: 400px">
    <div class="col-xxl-4 col-md-4">
        <ul class="list-group">
            <li class="list-group-item list-group-item-primary" aria-current="true">Antrian Karantina</li>
            @if(isset($panggilK->no_antrian))
                <li class="list-group-item" style="background-color: #0dcaf0">{{ $panggilK->no_antrian }} - {{ $panggilK->no_ppk }} - {{ $panggilK->tanggal_antrian }}</li>
            @else
                <li class="list-group-item">Tidak ada antrian</li>
            @endif                        
            @foreach ($listK as $item)
                <li class="list-group-item">{{ $item->no_antrian }} - {{ $item->no_ppk }} - {{ $item->tanggal_antrian }}</li>
            @endforeach
          </ul>
    </div>
    <div class="col-xxl-4 col-md-4">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success" aria-current="true">Antrian Mutu</li>
            @if(isset($panggilM->no_antrian))
                <li class="list-group-item" style="background-color: #20c997">{{ $panggilM->no_antrian }} - {{ $panggilM->no_ppk }} - {{ $panggilM->tanggal_antrian }}</li>
            @else
                <li class="list-group-item">Tidak ada antrian</li>
            @endif
            @foreach ($listM as $item)
                <li class="list-group-item">{{ $item->no_antrian }} - {{ $item->no_ppk }} - {{ $item->tanggal_antrian }}</li>
            @endforeach
          </ul>
    </div>
    <div class="col-xxl-4 col-md-4">
        <ul class="list-group">
            <li class="list-group-item list-group-item-warning" aria-current="true">Antrian Customer Service</li>
            @if(isset($panggilCS->no_antrian))
                <li class="list-group-item" style="background-color: #ffc107">{{ $panggilCS->no_antrian }} - {{ $panggilCS->no_ppk }} - {{ $panggilCS->tanggal_antrian }}</li>
            @else
                <li class="list-group-item">Tidak ada antrian</li>
            @endif
            @foreach ($listCS as $item)
                <li class="list-group-item">{{ $item->no_antrian }} - {{ $item->no_ppk }} - {{ $item->tanggal_antrian }}</li>
            @endforeach
          </ul>
    </div>
</div>
@endsection