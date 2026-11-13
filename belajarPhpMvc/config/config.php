<?php
    $server = "localhost";
    $user = "root"; // default user root
    $password = ""; //password default kosong
    $db = "katalog2";

    $koneksi = mysqli_connect($server, $user, $password, $db);

    if(!$koneksi || mysqli_connect_errno()){
        echo "Koneksi database gagal: " . mysqli_connect_error();
    }

