<?php
    include "class/connection.php";
    include "class/supplier.php";

    //print_r($_POST);

    $kode = substr($_POST['tipesupplier'],0,1).autoCode();
    $nama = $_POST['nama'];
    $noakun = $_POST['noakun'];
    $tipesupplier = $_POST['tipesupplier'];

    $sql="INSERT INTO `db_test`.`keu_5klsupplier` (`kodeklp`, `namaklp`, `noakun`, `tipe`) VALUES ('$kode', '$nama', '$noakun', '$tipesupplier')";

    $fetch= mysql_query($sql) or die(mysql_error());

    header('location: index.php')
?>