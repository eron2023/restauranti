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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        div {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
        }

        input[type="submit"] {
            background-color: #000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }

        input[type="text"]:focus {
            outline: none;
            border: 2px solid #000;
        }


        textarea {
            resize: none;
            width: 100%;
            white-space: pre-line;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #333;
        }
        img{
            max-width: 100%;
        }

        @media (max-width: 600px) {
            form {
                padding: 20px;
            }

            input[type="submit"] {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <form action='transfer.php' method='post'>
        <h1>Title: </h1>
        <br>
        <textarea name="title" oninput="autoExpand(this)"></textarea>
        <h1>Photo Gallery</h1>
        <div>
            <?php
            $files = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            foreach ($files as $file) {
                echo "<a href='$file' target='_blank'><img src='$file' alt='Photo'></a>";
            }
            $_SESSION["imgLink"] = $files[0];
            ?>
        </div>
        <div>
            <h1>Description: </h1>
            <br>
            <textarea name="description" oninput="autoExpand(this)"></textarea>
        </div>
        <!-- <div>
            <h1>Video-Link: </h1>
            <br>
            <input type="text" placeholder="Can Be Empty" name="videoLink">
        </div> -->
        <div>
            <h1>Kategoria: </h1>
            <br>
            <input type="text" name="kategoria">
        </div>
        <input type="submit" name="Add">
    </form>
    <script>
    function autoExpand(textarea) {
      // Adjust the height of the textarea based on its scrollHeight
      textarea.style.height = 'auto';
      textarea.style.height = textarea.scrollHeight + 'px';
    }
  </script>
</body>

</html>