<?php

require 'database.php';

if( $_SERVER['REQUEST_METHOD'] === POST ){
    $amount = $_POST['amount'];
    $coin = $_POST['coin'];

    if($coin == 'pen'){
        $sql_update_for_table_pen = "UPDATE pen 
                SET balance_pen = ?,
                WHERE id = ?";
    } else {
        $sql_update_for_table_usd = "UPDATE usd 
                SET balance_usd = ?,
                WHERE id = ?";
    }
}

?>

<h1>Module of Deposit</h1>
<form action="deposit.php" method='POST'>
    <label for="number">Amount</label>
    <input type="number" name="amount" id="amount" required>
    <br><br>
    <label for="coin">Coin</label>
    <select name="coin" id="coin">
        <option value="pen">PEN</option>
        <option value="usd">USD</option>
    </select>
    <input type="submit" value="Make deposit">
</form>