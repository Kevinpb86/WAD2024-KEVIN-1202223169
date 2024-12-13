<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isi Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e3f2fd; /* Biru muda */
        }
        .form-container {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #FF5722; /* Oranye */
        }
        .btn-primary {
            background-color: #2196F3; /* Biru terang */
            border-color: #2196F3;
        }
        .btn-primary:hover {
            background-color: #1976D2;
            border-color: #1976D2;
        }
        .btn-warning {
            background-color: #FF9800; /* Oranye terang */
            border-color: #FF9800;
        }
        .btn-warning:hover {
            background-color: #F57C00;
            border-color: #F57C00;
        }
    </style>
</head>
<body>
    <section class="container mt-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Isi Data Dosen</h2>
            <form action="{{ route('dosen.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_dosen" class="form-label">Kode Dosen</label>
                    <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" placeholder="Masukkan Kode Dosen" required>
                </div>
                <div class="mb-3">
                    <label for="nama_dosen" class="form-label">Nama Dosen</label>
                    <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" placeholder="Masukkan Nama Dosen" required>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP Dosen" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Dosen" required>
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="Masukkan No Telepon Dosen" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('dosen.index') }}" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

