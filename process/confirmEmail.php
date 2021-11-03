

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../style.css" rel="stylesheet">
        <title>HOTEL</title>
</head>

<body style="background-color:white">
<?php

    require ('../config.php');

    if(isset($_GET['verif'])) {
        $verif = $_GET ['verif'];
        $sql = "SELECT * FROM users where verif_code = '$verif'";
        $query = mysqli_query($con, $sql);
        if (mysqli_num_rows($query) > 0) {
            $user = mysqli_fetch_assoc ($query);
            $id = $user ['id'];
            $sql = "UPDATE users set is_verif=1 where id=$id";
            $query = mysqli_query($con, $sql);

            if($query) {
                echo "VERIFIKASI BERHASIL";
            } else {
                echo "VERIFIKASI GAGAL, ERROR : ".$query;
            }
        } else {
            echo "CODE TIDAK VALID";
        }
    } else {
        echo "VERIFIKASI BERHASIL";
    }

?>
            <div>
                    <img src="https://asset.kompas.com/crops/it4CcX-f7G3QwQr56acHOUv9UN4=/0x0:930x620/750x500/data/photo/2020/10/05/5f7a85c72b647.png" 
                    background-size: fullscr;
                    background-position: center;
                    height: 100%;
                    width: 100%>
            </div>
</body>
</html>