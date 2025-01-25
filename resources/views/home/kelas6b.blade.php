@extends('layouts.frontend.app', [
    'title' => 'Jadwal Pelajaran',
])

@section('content')
<section class="contact-area">
    <div class="container mt-5">
        <section id="card">
            <div class="container">
                <div class="row">
                    <!-- Jadwal Pelajaran Table -->
                    <table id="dataTable" class="table table-bordered mb-4 table-responsive" style="border-collapse: separate; border-spacing: 0 10px;">
                        <thead class="thead-light">
                            <tr>
                                <th colspan="8" class="text-center" style="background-color: #0056b3; color: white; font-size: 18px; padding: 15px 0; border-radius: 8px;">Jadwal Pelajaran Kelas VI.B</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Hubungkan ke database
                            $koneksi = mysqli_connect("localhost", "root", "", "laravel_project");

                            // Periksa koneksi
                            if (!$koneksi) {
                                die("Koneksi database gagal: " . mysqli_connect_error());
                            }

                            // Query untuk mengambil data berita
                            $query = "SELECT * FROM jadwal_pelajaran WHERE kelas = 'VI.B'";
                            $result = mysqli_query($koneksi, $query);

                            // Periksa apakah query berhasil
                            if (!$result) {
                                die("Query gagal: " . mysqli_error($koneksi));
                            }

                            $nomor = 1;
                            // Loop untuk menampilkan data berita dari database
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr style="background-color: ' . ($nomor % 2 == 0 ? '#ffffff' : '#cce0ff') . ';">
                                    <td>' . $nomor . '</td>
                                    <td>' . $row["waktu"] . '</td>
                                    <td>' . $row["senin"] . '</td>
                                    <td>' . $row["selasa"] . '</td>
                                    <td>' . $row["rabu"] . '</td>
                                    <td>' . $row["kamis"] . '</td>
                                    <td>' . $row["jumat"] . '</td>
                                    <td>' . $row["sabtu"] . '</td>
                                </tr>';
                                $nomor++; //
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection

@section('styles')
<style>
    .contact-area {
        background-color: #f2f2f2;
        padding: 40px 0;
    }

    /* Styling the Table */
    table {
        width: 100%;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    th, td {
        text-align: center;
        padding: 15px;
        font-size: 16px;
        vertical-align: middle;
    }

    th {
        background-color: #0056b3; /* Darker ocean blue */
        color: white;
        font-weight: bold;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    td {
        background-color: #ffffff;
        border: 1px solid #ddd;
        font-size: 14px;
    }

    tr:nth-child(odd) td {
        background-color: #cce0ff;  /* Light blue for odd rows */
    }

    tr:nth-child(even) td {
        background-color: #ffffff;  /* White for even rows */
    }

    tr:hover td {
        background-color: #d1ecf1;  /* Hover effect */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        th, td {
            font-size: 14px;
            padding: 10px;
        }

        .container {
            padding-left: 10px;
            padding-right: 10px;
        }
    }
</style>
@endsection
