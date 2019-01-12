<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Images List</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="img-container">
        <?php
            $db = new PDO('mysql:host=phpmyadmin.cmosonfcmrx6.eu-west-1.rds.amazonaws.com;dbname=images', 'root', 'rootroot');

            $getImages = $db->query("SELECT filename FROM images");
            $Imageslist = $getImages->fetchAll();
            for($i = 0; $i < count($Imageslist); $i++) {
                echo "<div class='image'><img src='https://s3-eu-west-1.amazonaws.com/com-rosettahub-default-nejmeddine.mannai/".$Imageslist[$i]['filename']."'></div>";
            }
        ?>
    </div>
</body>

</html>