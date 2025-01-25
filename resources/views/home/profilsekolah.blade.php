@extends('layouts.frontend.app', ['title' => 'Profil Sekolah'])

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-lg">
                    <div class="card-header" style="background-color: #d6d6d6; color: #000; text-align: center;">
                        <h2 class="card-title mb-0">Profil Sekolah SDN 9 Bantan</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>NPSN:</strong> 10401308</li>
                            <li class="list-group-item"><strong>Status:</strong> Negeri</li>
                            <li class="list-group-item"><strong>Bentuk Pendidikan:</strong> SD</li>
                            <li class="list-group-item"><strong>Status Kepemilikan:</strong> Pemerintah Pusat</li>
                            <li class="list-group-item"><strong>SK Pendirian Sekolah:</strong> 72/KPTS/I/2018</li>
                            <li class="list-group-item"><strong>Tanggal SK Pendirian:</strong> 10 Januari 1969</li>
                            <li class="list-group-item"><strong>Tanggal SK Izin Operasional:</strong> 1 Januari 1910</li>
                            <li class="list-group-item"><strong>Akreditasi:</strong> A</li>
                            <li class="list-group-item"><strong>Kurikulum:</strong> Kurikulum Merdeka</li>
                            <li class="list-group-item"><strong>Waktu:</strong> Pagi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <style>
        .card-header {
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
        }

        .list-group-item {
            font-size: 16px;
            padding: 10px 15px;
        }

        .list-group-item strong {
            color: #003366; /* Biru tua untuk label */
        }

        .card {
            border-radius: 10px;
        }
    </style>
@stop
