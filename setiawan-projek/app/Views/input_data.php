<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
    <hr>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .bordered {
            border: 1px solid #8B4513; /* Warna coklat pekat */
            background-color: #D2B48C; /* Warna coklat muda */
            padding: 10px;
            margin-top: 50px;
            border-radius: 5px;
            font-family: 'Rockwell', serif;
        }

        .title {
            font-family: 'Akura Popo', cursive;
            text-align: center;
            color: #8B4513; /* Warna coklat pekat */
        }

        .submit-btn {
            background-color: #8B4513; /* Warna coklat pekat */
            border-color: #8B4513; /* Warna coklat pekat */
        }
        
        .form-group-status {
            width: 20%; /* Mengurangi lebar field untuk status kelulusan */
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Akura+Popo&family=Rockwell&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-4 title">Input Data Mahasiswa</h2>
        <div class="bordered">
            <form action="<?= base_url('mahasiswa/submit_data') ?>" method="post">
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" class="form-control" name="nim" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <div class="form-group form-group-status">
                    <label for="status_kelulusan">Status Kelulusan:</label>
                    <select class="form-control" name="status_kelulusan" required>
                        <option value="Memuaskan">Memuaskan</option>
                        <option value="Tidak Memuaskan">Tidak Memuaskan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary submit-btn">Submit Data</button>
            </form>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
