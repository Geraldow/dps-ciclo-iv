<?php

require '../auth/database.php';

if( $_SERVER['REQUEST_METHOD'] === 'POST' ){}


?>
<link rel="stylesheet" href="./css/system.css">
<h1>Module of Change clue</h1>

<form action="clue.php" method="POST">
    <label for="currentClue">Put your current clue: </label>
    <input type="password" name="currentClue" id="currentClue" required>
    <br><br>

    <label for="newClue">Put your new clue: </label>
    <input type="password" name="newClue" id="newClue" required>
    <br><br>

    <input type="submit" value="Change clue">
</form>
<a href="../home.php">Back</a>