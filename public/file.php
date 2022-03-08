<h1>$_FILES ex:</h1>
<form action="" method="post" enctype="multipart/form-data" >
<p>Pictures: <br>
<input type="file" name="pictures[]" /><br>
<input type="file" name="pictures[]" /><br>
<input type="file" name="pictures[]" /><br>
<input type="submit" value="Send" style="width: 100px; background:blue; color:white ;margin:5px" />
</p>
</form>

<?php
if(isset($_FILES["pictures"]["error"])){
    echo "This file is uploded";
    foreach ($_FILES["pictures"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
            // basename() may prevent filesystem traversal attacks;
            // further validation/sanitation of the filename may be appropriate
            $name = basename($_FILES["pictures"]["name"][$key]);
            move_uploaded_file($tmp_name, "../data/$name");

            echo "<h3>$key: $name</h3>";
        }
    }
}
