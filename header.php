<?php
include("koneksi.php");

//Query untuk menampilkan dan mencari data
$q="";
if (isset($_GET["submit"]) && !empty($_GET["q"])) {
    $q = $_GET["q"];
    $sql_where = " WHERE nama LIKE '%{$q}%'";
}
$title = "Data Barang";
include_once "koneksi.php";
$sql = "SELECT * FROM data_barang";
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="container">