<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Patient Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patiant Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        
                                        <label>Nama</label>
                                        <input type="text" name="name" value="<?=$student['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>L/P</label>
                                        <input type="text" name="gender" value="<?=$student['gender'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="birth" value="<?=$student['birth'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Umur</label>
                                        <input type="text" name="age" value="<?=$student['age'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                    <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan" value="<?=$student['pekerjaan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No. Hp</label>
                                        <input type="text" name="phone" value="<?=$student['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Keluhan Utama</label>
                                        <input type="text" name="keluhanutama" value="<?=$student['keluhanutama'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Anamnesis</label>
                                        <input type="text" name="anamnesis" value="<?=$student['anamnesis'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                    <label>Pemeriksaan Fisik</label>
                                        <input type="text" name="pemeriksaanfisik" value="<?=$student['pemeriksaanfisik'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Pemeriksaan Laboratorium</label>
                                        <input type="text" name="pemeriksaanlaboratorium" value="<?=$student['pemeriksaanlaboratorium'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Pemeriksaan Imejing</label>
                                        <input type="text" name="pemeriksaanimejing" value="<?=$student['pemeriksaanimejing'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Terapi</label>
                                        <input type="text" name="terapi" value="<?=$student['terapi'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Instruksi Lanjutan</label>
                                        <input type="text" name="instruksilanjutan" value="<?=$student['instruksilanjutan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Patient
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>