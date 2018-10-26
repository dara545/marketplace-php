<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["msg"])) {
        echo "Vul dit veld in!";
    }
    else {
        echo ($_POST["msg"]);
    }


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    





</body>
</html>