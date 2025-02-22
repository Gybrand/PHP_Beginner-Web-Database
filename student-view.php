<?php
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

    <title>Patient View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Nama</label>
                                        <p class="form-control">
                                            <?=$student['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>L/P</label>
                                        <p class="form-control">
                                            <?=$student['gender'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Tanggal Lahir</label>
                                        <p class="form-control">
                                            <?=$student['birth'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Umur</label>
                                        <p class="form-control">
                                            <?=$student['age'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pekerjaan</label>
                                        <p class="form-control">
                                            <?=$student['pekerjaan'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>No. Hp</label>
                                        <p class="form-control">
                                            <?=$student['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Keluhan Utama</label>
                                        <p class="form-control">
                                            <?=$student['keluhanutama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Anamnesis</label>
                                        <p class="form-control">
                                            <?=$student['anamnesis'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pemeriksaan Fisik</label>
                                        <p class="form-control">
                                            <?=$student['pemeriksaanfisik'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pemeriksaan Laboratorium</label>
                                        <p class="form-control">
                                            <?=$student['pemeriksaanlaboratorium'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pemeriksaan Imejing</label>
                                        <p class="form-control">
                                            <?=$student['pemeriksaanimejing'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Terapi</label>
                                        <p class="form-control">
                                            <?=$student['terapi'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Instruksi Lanjutan</label>
                                        <p class="form-control">
                                            <?=$student['instruksilanjutan'];?>
                                        </p>
                                    </div>

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