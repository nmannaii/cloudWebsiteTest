<?php
    //data base
    $db = new PDO('mysql:host=phpmyadmin.cmosonfcmrx6.eu-west-1.rds.amazonaws.com;dbname=images', 'root', 'rootroot');
    //include the S3 class
    if (!class_exists('S3'))require_once('S3.php');
    
    //AWS access info
    if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAIMOFA3Z2C7CVBEAQ');
    if (!defined('awsSecretKey')) define('awsSecretKey', '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');
    
    //instantiate the class
    $s3 = new S3(awsAccessKey, awsSecretKey);
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = $_FILES['file']['name'];
        $fileTempName = $_FILES['file']['tmp_name'];
        //$sourcePath = $_FILES['file']['tmp_name'];
        //$targetPath = "uploads/".$fileName;
        $s3->putBucket("com-rosettahub-default-nejmeddine.mannai", S3::ACL_PUBLIC_READ);
        // if(move_uploaded_file($sourcePath,$targetPath)){
        //     $uploadedFile = $fileName;
        // }
        if ($s3->putObjectFile($fileTempName, "com-rosettahub-default-nejmeddine.mannai", $fileName, S3::ACL_PUBLIC_READ)) {
            $insert = $db->query("INSERT INTO images (filename) VALUES ('".$fileName."')");
            //var_dump($fileName);
            echo "Ok";
        }else {
            echo "NotOk";
        }
    }
?>