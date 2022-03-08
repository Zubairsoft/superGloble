<?php

//Start $GLOBALS example
echo '<br> <br> <br> <h1 >$GLOBALS ex:</h1>';
function test()
{
    $foo = "local variable";
    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
    echo '$foo in current scope: ' . $foo . "<br>";
}

$foo = "Example content";
test();

?>
