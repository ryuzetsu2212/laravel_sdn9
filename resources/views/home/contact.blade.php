@extends('layouts.frontend.app', ['title' => 'Profil'])

@section('content')
<section class="contact-area">
    <div class="container mt-5">
        <section id="card">
            <div class="container">
                <div class="row">
                    <table id="dataTable" class="table table-bordered mb-4 table-responsive-md shadow-lg">
                        <thead>
                            <tr>
                                <th colspan="6" class="text-center">Profil Guru SDN 9 Bantan</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Pangkat/Golongan</th>
                                <th>Pendidikan</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $koneksi = mysqli_connect("localhost", "root", "", "laravel_project");

                            if (!$koneksi) {
                                die("Koneksi database gagal: " . mysqli_connect_error());
                            }

                            $query = "SELECT * FROM users WHERE level = 'user'";
                            $result = mysqli_query($koneksi, $query);

                            if (!$result) {
                                die("Query gagal: " . mysqli_error($koneksi));
                            }

                            $nomor = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td>' . $nomor . '</td>
                                    <td>' . htmlspecialchars($row["name"]) . '</td>
                                    <td>' . htmlspecialchars($row["nip"]) . '</td>
                                    <td>' . htmlspecialchars($row["pangkat"]) . '</td>
                                    <td>' . htmlspecialchars($row["pendidikan"]) . '</td>
                                    <td>' . htmlspecialchars($row["jabatan"]) . '</td>
                                </tr>';
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th, table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
        vertical-align: middle;
    }

    table th {
        background-color: #003366;
        color: white;
        font-size: 16px;
        text-align: center;
    }

    table tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    table tr:nth-child(even) {
        background-color: #ffffff;
    }

    table tr:hover {
        background-color: #e0f7fa;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        table {
            font-size: 12px;
        }

        table th, table td {
            padding: 8px;
        }
    }

    table.shadow-lg {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    thead th[colspan="6"] {
        background-color: #f8f9fa;
        color: #003366;
        font-size: 18px;
        padding: 15px 0;
        border-radius: 8px 8px 0 0;
    }
</style>
@stop
