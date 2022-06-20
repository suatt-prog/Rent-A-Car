<?php
    $isim=$_POST["k_isim"];
    $sifre=$_POST["k_sifre"];
    if($_POST["k_isim"]=='' || $_POST["k_sifre"]==''){
        header("LOCATION:register.html");die();
    }
    if(isset($_COOKIE["isim"]) && isset($_COOKIE["sifre"])){
        setcookie("isim", $isim, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("sifre", $sifre, time() + (86400 * 30), "/"); // 86400 = 1 day
    }
    $conn=mysqli_connect("localhost","root","","odev");
    $s="INSERT INTO aracislem". "(isim,sifre)". "VALUES ('$isim','$sifre')";
    $sorgu=mysqli_query($conn,$s);
    session_start();
    $_SESSION[$_COOKIE["isim"]]=$_COOKIE["sifre"];
    header("LOCATION:listele.php");
    die();
?>
