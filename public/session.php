<?php
//Start $_SESSION example

session_start();
echo '<br> <br> <br> <h1>$_SESSION ex:</h1>';
$_SESSION["newSession"]="mohammd zubair";
echo "<br> ".$_SESSION["newSession"];
