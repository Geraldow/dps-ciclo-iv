<?php

require '../auth/database.php';

if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    $amount = $_POST['amount'];
    $coin = $_POST['coin'];

    if($coin == 'pen'){
        $sql_update = 
        "UPDATE accounts 
        SET balance_pen = balance_pen - ?
        WHERE id = 1";
    } else {
        $sql_update = 
            "UPDATE accounts 
            SET balance_usd = balance_usd - ?
            WHERE id = 1";
    }

    $calculate = $connection -> prepare($sql_update);


    $calculate->bind_param("d",$amount);

    if ( $calculate -> execute()){
        echo "Withraw has been execute successfully";
    } else{
        echo "¡ERROR! Withraw hasn't been execute";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/812c8ee19a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles_withraw.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h1 class="title-form">Module of Withraw</h1>
<form action="withraw.php" method='POST' >
    <label for="number">Amount</label>
    <input type="number" name="amount" id="amount" required>
    <br><br>
    <label for="coin">Coin</label>
    <select name="coin" id="coin">
        <option value="pen">PEN</option>
        <option value="usd">USD</option>
    </select>
    <input type="submit" value="Make withraw" class="boton">
    <a href="../home.php" class="boton-2">Back</a>
</form>