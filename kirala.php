<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <form action="kirala_back.php" method="post">
        <div class="container">
            <center>
                <table border="1">
                <tr>
                    <td>
                        Araç Modeli
                    </td>
                    <td>
                        <input type="radio" name="arac" value="posat">
                        posat ücret 300
                        <input type="radio" name="arac" value="jetta">
                        jetta ücret 250
                        <input type="radio" name="arac" value="astra">
                        astra ücret 200
                        <input type="radio" name="arac" value="I20">
                        I20 ücret 150
                        <input type="radio" name="arac" value="fiorino">
                        fiorino 170
                    </td>
                </tr>
                <tr>
                    <td>
                        Tarih
                    </td>
                    <td>
                        <input type="text" name="tarih" size="70">
                    </td>
                </tr>
                <tr>
                    <td>
                        Kaç gün kullanmak istiyorsunuz
                    </td>
                    <td>
                        <input type="text" name="gun" size="70">
                    </td>
                </tr>
                <tr>
                    <td>
                        Teslim alınacak şube
                    </td>
                    <td>
                        <input type="text" name="sube" size="70">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="kayit" value="Kaydet">
                    </td>
                </tr>
                </table>
            </center>
        </div>
    </form>
    </body>
</html>
