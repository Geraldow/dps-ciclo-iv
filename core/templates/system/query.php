<?php

require 'database.php';



?>

<h1>Module of Query</h1>
<p>Balance in PEN: </p>
<p>Balance in USD: </p>



<form action="query.php" method='POST'>
    <label for="number">Amount</label>
    <input type="number" name="amount" id="amount" required>
    <br><br>
    <label for="coin">Coin</label>
    <select name="coin" id="coin">
        <option value="pen">PEN</option>
        <option value="usd">USD</option>
    </select>
    <input type="submit" value="Make clue">
</form>