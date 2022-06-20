<?php

    $conn=mysqli_connect("localhost","386927","sifre","386927");

    $s="SELECT * FROM aracislem";

    $sorgu=mysqli_query($conn,$s);

    $isim=$_POST["k_isim"];

    $sifre=$_POST["k_sifre"];
    if($_POST["k_isim"]=='' || $_POST["k_sifre"]==''){
        header("LOCATION:index.html");die();
    }
    while($eleman=mysqli_fetch_row($sorgu)){

        if($isim==$eleman[4] && $sifre==$eleman[5]){

            setcookie("isim", "", time() - (3600) );

            setcookie("sifre", "", time() - (3600) );

            setcookie("isim", $isim, time() + (3600), "/"); // 86400 = 1 day

            setcookie("sifre", $sifre, time() + (3600), "/"); // 86400 = 1 day

            if(isset($_COOKIE["isim"]) && isset($_COOKIE["sifre"])){

                echo "cookie".$_COOKIE["isim"].$_COOKIE["sifre"];

            }

            //echo $isim.$sifre;

            session_start();

            $_SESSION[$isim]=$sifre;

            header("LOCATION:listele.php");die();

            break;

        }

        //echo $_SESSION["login"].$eleman[4].$eleman[5]."<br/>";

    }

    if(!isset($_SESSION[$isim])){

        header("LOCATION:index.html");die();

    }

?>
