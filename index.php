<?php
session_start();
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP File Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
        printf('<b>%s</b>', $_SESSION['message']);
        unset($_SESSION['message']);
    }
    ?>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <div>
            <span>Upload a File: </span>
            <input type="file" name="uploadedFile" />
        </div>

        <input type="submit" name="uploadBtn" value="Upload" />
    </form>
</body>
</html>