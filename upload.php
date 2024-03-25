<?php
session_start();

if(isset($_SESSION['isAdmin'])){
    if($_SESSION['isAdmin'] == 1){

    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}


$folderName = "uploads";


if (!file_exists($folderName)) {

    if (mkdir($folderName, 0777, true)) {
    } else {
        echo "Error creating folder '$folderName'.";
    }
}


if (isset($_POST["submit"])) {

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    try {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $_SESSION["isUploaded"] = true;
                header("Location: insertProduct.php");
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File is not an image.";
        }
    } catch (ValueError $e) {
        echo "No image inserted!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Photo Gallery</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
            box-sizing: border-box;
        }

        input[type='file'] {
            margin: 15px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type='submit'] {
            background-color: #000;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            box-sizing: border-box;
        }

        input[type='submit']:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <h1>Upload Photo</h1>
    <form action='<?php echo $_SERVER["PHP_SELF"] ?>' method='post' enctype='multipart/form-data'>
        Select photo to upload:
        <input type='file' name='photo' id='photo' accept='image/*'>
        <input id='hideButton' type='submit' value='Upload Photo' name='submit'>
    </form>
</body>

</html>