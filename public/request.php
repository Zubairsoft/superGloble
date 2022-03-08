<?php
//Start $_REQUEST example
echo '<br> <br> <br> <h1 style="color:blue;">$_REQUEST</h1>';
echo "<form action='index.php'>
<input type='text' name='name' id=''>
<input type='submit' value='send'>
</form>";
if(isset($_REQUEST['name'])){
    echo "<br> ".$_REQUEST['name'];
}

