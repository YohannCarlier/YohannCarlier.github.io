<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $id = mysqli_connect("localhost:3307","root","","portfolio");
    if(isset($_POST["bout"])){
    $nom = $_POST["nom"];
    $mail = $_POST["email"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];
    $req = "insert into messagerie values (null, '$nom', '$mail', '$telephone', '$message')";
    mysqli_query($id, $req);
    echo "Nous vous confirmons l'envoie de votre message";
    header("refresh:2, url=index.html");
    }
    ?>
</body>
</html>