<?php
        session_start();
        if($_SESSION[$_COOKIE["isim"]]!=$_COOKIE["sifre"]){
            header("LOCATION:index.html");
            die();
        }
        $conn=mysqli_connect("localhost","root","","odev");
        $id=$_GET["id"];
        $isim=$_COOKIE["isim"];
        $sifre=$_COOKIE["sifre"];
        $sil=mysqli_query($conn,"DELETE FROM aracislem WHERE id='$id' ");
        header("LOCATION:listele.php");
?>