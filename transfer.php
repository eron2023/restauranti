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


$source_dir = "uploads/";
$destination_dir = "Foto/";

// Open the source directory
if ($handle = opendir($source_dir)) {
    // Loop through each file in the source directory
    while (($file = readdir($handle)) !== false) {
        // Skip hidden files
        if ($file[0] == ".") continue;

        // Construct the full file path
        $source_file = $source_dir . $file;
        $destination_file = $destination_dir . $file;

        // Transfer the file
        if (is_file($source_file)) {
            if (!file_exists($destination_file)) {
                copy($source_file, $destination_file);
                echo "Copied " . $source_file . " to " . $destination_file . "<br>";

            } else {
                echo "File " . $destination_file . " already exists. Skipping.<br>";
            }
            // Delete the file from the source directory
            unlink($source_file);
            echo "Deleted " . $source_file . " from source directory.<br>";
        }
    }

    // Close the source directory
    closedir($handle);
   
    if (isset($_POST["Add"])) {
        include_once 'productRepository.php';
        include_once 'product.php';
        $product = new Product(null, $_POST["title"], str_replace("uploads/", "Foto/", $_SESSION["imgLink"]), $_POST["description"], $_POST["kategoria"] ,$_SESSION["ID"]);
         $ProductRepo = new ProductRepository;
         $ProductRepo->insertProduct($product);
        }

    $_SESSION["isUploaded"] = false;
    header("Location: index.php");
}
