<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    //echo "cookie".$_COOKIE["isim"].$_COOKIE["sifre"];
    session_start();
    if($_SESSION[$_COOKIE["isim"]]!=$_COOKIE["sifre"] && $_COOKIE["sifre"]!=null){
        header("LOCATION:index.html");die();
    }
    echo $_COOKIE["sifre"]." ".$_SESSION[$_COOKIE["isim"]];
    if(isset($_COOKIE["isim"]) && isset($_COOKIE["sifre"])){
        $ad=$_COOKIE["isim"];
        $sifre=$_COOKIE["sifre"];
    }
    $conn=mysqli_connect("localhost","386927","Gr--2002","386927");
    if(!isset($conn)){
        echo "Veritabanina giris saglanamadi";
    }
    //echo $ad.$sifre;
    $yazdir="SELECT * FROM aracislem WHERE isim='$ad' AND sifre='$sifre' AND arac!='' AND isim!='' AND sifre!=''";
    $getir=mysqli_query($conn,$yazdir);
    if(isset($getir)){
        echo "<center>";
        echo "<table border='1' class='table table-dark'>";
        echo "<tr><td>id</td><td>model</td><td>tarih</td><td>gun sayisi</td><td>teslim alinan sube</td><td>toplam ucret</td></tr>";
        while($row=mysqli_fetch_row($getir)){
            echo "<tr><td>".$row[7]."</td>"."<td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>"."<td>".$row[3]."</td>"."<td>".$row[6]."</td>"."<td>  <a href='kayit_sil.php?id=".$row[7]."'>delete</a></td>"."</tr>";
        }
        echo "<tr><td><a href='kirala.php'>Rent a car</a></td></tr>";
        echo "</table>";
        echo "</center>";
        mysqli_close($conn);
    }
    else{
        echo "Getiremedi";
    }
?>
</body>
</html>
