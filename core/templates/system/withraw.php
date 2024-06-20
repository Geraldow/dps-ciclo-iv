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


<h1>Module of Withraw</h1>
<form action="withraw.php" method='POST'>
    <label for="number">Amount</label>
    <input type="number" name="amount" id="amount" required>
    <br><br>
    <label for="coin">Coin</label>
    <select name="coin" id="coin">
        <option value="pen">PEN</option>
        <option value="usd">USD</option>
    </select>
    <input type="submit" value="Make withraw">
</form>
<a href="../home.php">Back</a>