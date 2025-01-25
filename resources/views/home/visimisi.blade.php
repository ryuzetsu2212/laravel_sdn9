@extends('layouts.frontend.app',[
'title' => 'Profil',
])
@section('content')
<style>
    /* Gaya untuk judul utama */
    h2 {
        text-align: center;
        background-color: #f2f2f2; /* Latar belakang abu-abu */
        color: #000; /* Warna teks hitam */
        padding: 15px;
        border-radius: 8px; /* Membuat sudut tabel melengkung */
        margin-bottom: 30px;
        font-weight: bold;
    }

    /* Gaya tabel */
    .table {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        background-color: #ffffff; /* Warna latar belakang tabel */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
    }

    .table th, .table td {
        text-align: left;
        padding: 15px;
        vertical-align: middle;
        font-size: 16px;
        color: #333; /* Warna teks */
    }

    .table tbody tr:nth-child(odd) {
        background-color: #f2f2f2; /* Warna baris ganjil */
    }

    .table tbody tr:nth-child(even) {
        background-color: #ffffff; /* Warna baris genap */
    }

    .table-bordered td {
        border: 1px solid #ddd; /* Warna border */
    }

    .table th {
        background-color: #003366; /* Warna biru tua */
        color: #ffffff; /* Teks putih */
        text-align: center;
        font-weight: bold;
    }
</style>

<section class="contact-area">
    <!-- Visi dan Misi -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>Visi dan Misi SDN 9 Bantan</h2>
            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Visi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Terwujudnya peserta didik yang disiplin, terampil, berprestasi, beriman, bertaqwa dan berakhlak mulia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Misi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1. Mewujudkan siswa yang beriman bertaqwa dan berakhlak mulia </td>
                            </tr>
                            <tr>
                                <td>2. Menumbuhkembangkan rasa cinta terhadap sesama manusia dan lingkungan</td>
                            </tr>
                            <tr>
                                <td>3. Menerapkan sikap disiplin dan bertanggung jawab</td>
                            </tr>
                            <tr>
                                <td>4. Mewujudkan siswa yang berpengetahuan secara akademik dan terampil secara non akademik</td>
                            </tr>
                            <tr>
                                <td>5. Membiasakan siswa hidup bersih</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
