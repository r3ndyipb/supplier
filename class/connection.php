<?php

    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "db_test";

    $koneksi = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Koneksi server gagal");
    mysql_select_db($mysql_database, $koneksi) or die("Koneksi database gagal");


?>