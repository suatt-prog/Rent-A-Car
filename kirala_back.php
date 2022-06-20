<?php

    session_start();

    if($_SESSION[$_COOKIE["isim"]]!=$_COOKIE["sifre"]){

        header("LOCATION:index.html");

        die();

    }

    if(isset($_SESSION[$_COOKIE["isim"]])){

        $ad=$_COOKIE["isim"];

        $sifre=$_COOKIE["sifre"];

    }

    if(isset($_POST["kayit"])){

        $arac=$_POST["arac"];

        $tarih=$_POST["tarih"];

        $gun=$_POST["gun"];

        $sube=$_POST["sube"];

        if(isset($_COOKIE["isim"]) && isset($_COOKIE["sifre"])){

            $ad=$_COOKIE["isim"];

            $sifre=$_COOKIE["sifre"];            

        }

        $ucret=0;

        if($arac=="posat"){

            $ucret=300*$gun;

        }

        if($arac=="jetta"){

            $ucret=250*$gun;

        }

        if($arac=="fiorino"){

            $ucret=170*$gun;

        }

        if($arac=="I20"){

            $ucret=150*$gun;

        }

        if($arac=="astra"){

            $ucret=200*$gun;

        }
        echo $_COOKIE["isim"].$_COOKIE["sifre"];
	$ad=$_COOKIE["isim"];
        $sifre=$_COOKIE["sifre"];      
        if(    $conn=mysqli_connect("localhost","386927","sifre","386927")){

            echo "<p>".$arac.$tarih.$gun.$sube.$ad.$sifre."</p>";

            $db_update="INSERT INTO aracislem"." (arac,tarih,gun,sube,isim,sifre,ucret) "."VALUES ('$arac','$tarih','$gun','$sube','$ad','$sifre','$ucret')";

            //$db_update="UPDATE aracislem SET arac='$arac',tarih='$tarih',gun='$gun',sube='$sube' WHERE isim='$ad' AND sifre='$sifre'";

            if(mysqli_query($conn,$db_update)){

                header("LOCATION:listele.php");die();

            }

        }

    }

?>
