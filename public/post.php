<?php

//Start $_POST example
echo '<br> <br> <br> <h1>$_POST ex:</h1>';
echo "<form action='index.php' method='GET'>
<input type='text' name='name' id=''>
<input type='submit' value='send'>
</form>";
if(isset($_POST['name'])){
    echo "<br> ".$_POST['name'];
}
