<?php

require '../auth/database.php';

$sql_query = 
    "SELECT balance_pen, balance_usd 
    FROM accounts 
    WHERE id = 1";

$sql_query_result = $connection -> query ($sql_query);

if($sql_query_result && $sql_query_result -> num_rows > 0){
    $account_balance = $sql_query_result -> fetch_assoc();
} else {
    $account_balance = null;
}

?>

<h1>Module of Query</h1>
<?php if ($account_balance): ?>
    <p>Balance in PEN: <?php echo $account_balance ['balance_pen']; ?> </p> 
    <p>Balance in USD: <?php echo $account_balance ['balance_usd']; ?> </p>
<?php else: ?>
    <p>No se encontró la cuenta o no tiene saldo.</p>
<?php endif; ?>

<a href="../home.php">Back</a>