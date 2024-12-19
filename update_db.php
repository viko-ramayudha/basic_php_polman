<?php
    include "koneksi.php";


    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    
    $query = "UPDATE mahasiswa SET nama = '$nama', prodi = '$prodi' WHERE nim = '$nim'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location: data_read.php");
        exit;
    } else {
        echo "Update data gagal. Silakan coba lagi.";
    }

    mysqli_close($con);
?>