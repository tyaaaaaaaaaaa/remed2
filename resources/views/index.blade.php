<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kunjungan Pasien - Apotek FarmaMedika</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f8fafc;
            color: #1e293b;
            padding: 30px 20px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
            background: #ffffff;
            padding: 22px 28px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .header-title h2 {
            color: #166534;
            font-size: 22px;
            margin-bottom: 4px;
        }
        .header-title p {
            color: #15803d;
            font-size: 13.5px;
        }
        .btn-add {
            background-color: #166534;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
        }
        .btn-add:hover {
            background-color: #14532d;
        }
        .alert-success {
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 13.5px;
            margin-bottom: 20px;
            background-color: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }
        .summary-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 22px;
        }
        .card-stat {
            background: #ffffff;
            padding: 18px 20px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
        .card-stat h4 {
            color: #64748b;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }
        .card-stat .value {
            font-size: 22px;
            font-weight: 700;
            color: #166534;
        }
        .table-responsive {
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        thead {
            background-color: #f1f5f9;
        }
        th {
            padding: 13px 16px;
            font-size: 13px;
            font-weight: 700;
            color: #334155;
            border-bottom: 2px solid #cbd5e1;
        }
        td {
            padding: 13px 16px;
            font-size: 13.5px;
            color: #1e293b;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }
        tbody tr:hover {
            background-color: #f8fafc;
        }
        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
        }
        .badge-menunggu {
            background-color: #fef9c3;
            color: #854d0e;
            border: 1px solid #fde047;
        }
        .badge-selesai {
            background-color: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }
        .btn-delete {
            background-color: #fee2e2;
            color: #dc2626;
            border: 1px solid #fecaca;
            padding: 5px 12px;
            border-radius: 5px;
            font-size: 12.5px;
            font-weight: 600;
            cursor: pointer;
        }
        .btn-delete:hover {
            background-color: #fecaca;
        }
    </style>
</head>
<body>

    <div class="container">
    @csrf
        <div class="header-section">
            <div class="header-title">
                <h2>Daftar Kunjungan Pasien</h2>
                <p>Buku Antrean Layanan Konsultasi — Apotek FarmaMedika</p>
            </div>
            <!-- Arahkan href ke route tambah kunjungan -->
            <a href="/kunjungan/tambah" class="btn-add">+ Catat Kunjungan</a>
        </div>

        <!-- Tampilkan alert ini hanya jika ada session('success') -->
        <div class="alert-success">
            Pesan notifikasi sukses ditampilkan di sini.
        </div>

        <div class="summary-cards">
            <div class="card-stat">
                <h4>Total Data Kunjungan</h4>
                <div class="value">0 Pasien</div>
            </div>
            <div class="card-stat">
                <h4>Pasien Masih Menunggu</h4>
                <td><span class="badge badge-menunggu">Menunggu</span></td>
                <div class="value">0 Pasien</div>
            </div>
        </div>

        <div class="table-responsive">
        @loop->iteration
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>No. Telepon</th>
                        <th>Keluhan / Keperluan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( as )
                        
                    @endforeach
                    <tr>
                        <td>1</td>
                        <td><strong>Rina Safitri</strong></td>
                        <td>081234567891</td>
                        <td>Konsultasi obat batuk berdahak dan vitamin</td>
                        <td>2026-11-25</td>
                        <td><span class="badge badge-menunggu">Menunggu</span></td>
                        <td>
                            <form action="/kunjungan/hapus/1" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data kunjungan ini?')">
                                @csrf
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>