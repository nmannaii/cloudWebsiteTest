<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="my-container">
        <input type="file" id="upload" style="display: none">
        <button id="upload-btn">Choose An Image To Upload</button>
        <img src="tick.png" />
        <a id="goToImages" href="/images.php"><button>Show All Images</button></a>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>