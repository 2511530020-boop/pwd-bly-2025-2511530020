<?php
  session_start();
  $arrbiodata = [
    "nama" => $_POST["txtNama"],
    "email" => $_POST["txtEmail"]
    "pesan" => $_POST["txtPesan"]
  ];
  
  $_SESSION["biodata"] = $arrbiodata;
  header("lucation: index.php#tamu");
?>