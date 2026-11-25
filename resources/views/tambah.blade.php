<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catat Kunjungan Baru - Apotek FarmaMedika</title>
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
            padding: 35px 20px;
        }
        .form-card {
            max-width: 540px;
            margin: 0 auto;
            background: #ffffff;
            padding: 32px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 16px rgba(0,0,0,0.04);
        }
        .form-header {
            margin-bottom: 22px;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 14px;
        }
        .form-header h2 {
            color: #166534;
            font-size: 21px;
            margin-bottom: 4px;
        }
        .form-header p {
            color: #64748b;
            font-size: 13px;
        }
        .alert-error {
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 18px;
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        .form-group {
            margin-bottom: 16px;
        }
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 13px;
            font-weight: 600;
            color: #166534;
        }
        .form-control {
            width: 100%;
            padding: 10px 14px;
            border: 1.5px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }
        .form-control:focus {
            border-color: #16a34a;
        }
        .btn-group {
            display: flex;
            gap: 12px;
            margin-top: 22px;
        }
        .btn-save {
            flex: 2;
            padding: 11px;
            background-color: #166534;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }
        .btn-save:hover {
            background-color: #14532d;
        }
        .btn-back {
            flex: 1;
            padding: 11px;
            background-color: #f1f5f9;
            color: #475569;
            text-align: center;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
        }
        .btn-back:hover {
            background-color: #e2e8f0;
        }
    </style>
</head>
<body>

    <div class="form-card">
        <div class="form-header">
            <h2>Catat Kunjungan Pasien Baru</h2>
            <p>Isi data pasien dan keluhan untuk dimasukkan ke daftar antrean</p>
        </div>

        <!-- Tampilkan blok ini hanya jika $errors->any() -->
        <div class="alert-error">
            Pesan error validasi ditampilkan di sini.
        </div>

        <!-- Arahkan action ke route /kunjungan/simpan dan jangan lupa @csrf -->
        <form action="/kunjungan/simpan" method="POST">
        @csrf
            <div class="form-group">
                <label>Nama Lengkap Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" placeholder="Contoh: Andi Wijaya">
            </div>

            <div class="form-group">
                <label>Nomor Telepon / WhatsApp</label>
                <input type="text" name="no_telepon" class="form-control" placeholder="Contoh: 081234567890">
            </div>

            <div class="form-group">
                <label>Keluhan / Keperluan</label>
                <textarea name="keluhan" class="form-control" rows="3" placeholder="Tuliskan keluhan pasien secara singkat"></textarea>
            </div>

            <div class="form-group">
                <label>Tanggal Kunjungan</label>
                <input type="date" name="tanggal_kunjungan" class="form-control">
            </div>

            <div class="btn-group">
                <a href="/kunjungan" class="btn-back">Kembali</a>
                <button type="submit" class="btn-save">Simpan Kunjungan</button>
            </div>
        </form>
    </div>

</body>
</html>