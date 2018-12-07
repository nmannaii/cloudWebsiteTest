<?php
    $db = new PDO('mysql:host=localhost;dbname=images', 'root', '');
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = time().'_'.$_FILES['file']['name'];
        $sourcePath = $_FILES['file']['tmp_name'];
        $targetPath = "uploads/".$fileName;
        if(move_uploaded_file($sourcePath,$targetPath)){
            $uploadedFile = $fileName;
        }
    }

    $insert = $db->query("INSERT INTO images (filename) VALUES ('".$fileName."')");
    //var_dump($fileName);
    echo $insert? 'Ok': 'Err'
?>