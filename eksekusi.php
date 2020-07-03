<?php
    include "class/connection.php";
    include "class/supplier.php";

    //print_r($_POST);

    $action = $_GET['action'];
    if(trim($action)=='delete'){
        $id = $_GET['id'];
        if(trim($id) <> ''){
            $sql="DELETE FROM `keu_5klsupplier` WHERE  `kodeklp`='".$id."'";
            $fetch= mysql_query($sql) or die(mysql_error());
        }
    }else if(trim($action)=='update'){
        $id = $_GET['id'];
        if(trim($id) <> ''){
            $sql="DELETE FROM `keu_5klsupplier` WHERE  `kodeklp`='".$id."'";
            $fetch= mysql_query($sql) or die(mysql_error());
        }
    }else{
        $initial        = substr($_POST['tipesupplier'],0,1);
        $kode           = $initial.autoCode($initial);
        $nama           = $_POST['nama'];
        $noakun         = $_POST['noakun'];
        $tipesupplier   = $_POST['tipesupplier'];

        $sql="INSERT INTO `keu_5klsupplier` (`kodeklp`, `namaklp`, `noakun`, `tipe`) VALUES ('$kode', '$nama', '$noakun', '$tipesupplier')";
        $fetch= mysql_query($sql) or die(mysql_error());
    }

    header('location: index.php');
?>