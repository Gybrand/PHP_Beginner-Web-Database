<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Patient Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Add 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>L/P</label>
                                <input type="text" name="gender" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tanggal Lahir</label>
                                <input type="text" name="birth" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Umur</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>No. HP</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Keluhan Utama</label>
                                <input type="text" name="keluhanutama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Anamnesis</label>
                                <input type="text" name="anamnesis" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Pemeriksaan Fisik</label>
                                <input type="text" name="pemeriksaanfisik" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Pemeriksaan Laboratorium</label>
                                <input type="text" name="pemeriksaanlaboratorium" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Pemeriksaan Imejing</label>
                                <input type="text" name="pemeriksaanimejing" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Terapi</label>
                                <input type="text" name="terapi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Instruksi Lanjutan</label>
                                <input type="text" name="instruksilanjutan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">
                                    Save Patient</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
