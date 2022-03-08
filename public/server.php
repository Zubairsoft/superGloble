<?php
//Start $_SERVER example
echo '<br> <br> <br> <h1>$_SERVER ex:</h1>';

foreach ($_SERVER as $key => $value) {
    echo "<h3> <span style='color:red;'>$key</span> : $value </h3>";
}
