<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $birth = mysqli_real_escape_string($con, $_POST['birth']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $pekerjaan = mysqli_real_escape_string($con, $_POST['pekerjaan']);
    $phone= mysqli_real_escape_string($con, $_POST['phone']);
    $keluhanutama = mysqli_real_escape_string($con, $_POST['keluhanutama']);
    $anamnesis = mysqli_real_escape_string($con, $_POST['anamnesis']);
    $pemeriksaanfisik = mysqli_real_escape_string($con, $_POST['pemeriksaanfisik']);
    $pemeriksaanlaboratorium = mysqli_real_escape_string($con, $_POST['pemeriksaanlaboratorium']);
    $pemeriksaanimejing = mysqli_real_escape_string($con, $_POST['pemeriksaanimejing']);
    $terapi = mysqli_real_escape_string($con, $_POST['terapi']);
    $instruksilanjutan = mysqli_real_escape_string($con, $_POST['instruksilanjutan']);

    $query = "UPDATE students SET name='$name', gender='$gender', birth='$birth', age='$age', pekerjaan='$pekerjaan', phone='$phone', keluhanutama='$keluhanutama', anamnesis='$anamnesis', pemeriksaanfisik='$pemeriksaanfisik', pemeriksaanlaboratorium='$pemeriksaanlaboratorium', terapi='$terapi', instruksilanjutan='$instruksilanjutan' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $birth = mysqli_real_escape_string($con, $_POST['birth']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $pekerjaan = mysqli_real_escape_string($con, $_POST['pekerjaan']);
    $phone= mysqli_real_escape_string($con, $_POST['phone']);
    $keluhanutama = mysqli_real_escape_string($con, $_POST['keluhanutama']);
    $anamnesis = mysqli_real_escape_string($con, $_POST['anamnesis']);
    $pemeriksaanfisik = mysqli_real_escape_string($con, $_POST['pemeriksaanfisik']);
    $pemeriksaanlaboratorium = mysqli_real_escape_string($con, $_POST['pemeriksaanlaboratorium']);
    $pemeriksaanimejing = mysqli_real_escape_string($con, $_POST['pemeriksaanimejing']);
    $terapi = mysqli_real_escape_string($con, $_POST['terapi']);
    $instruksilanjutan = mysqli_real_escape_string($con, $_POST['instruksilanjutan']);
    $query = "INSERT INTO students (name,gender,birth,age,pekerjaan,phone,keluhanutama,anamnesis,pemeriksaanfisik,pemeriksaanlaboratorium,pemeriksaanimejing,terapi,instruksilanjutan) VALUES ('$name','$gender','$birth','$age','$pekerjaan','$phone','$keluhanutama','$anamnesis','$pemeriksaanfisik','$pemeriksaanlaboratorium','$pemeriksaanimejing','$terapi','$instruksilanjutan')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Patient Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Patient Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>