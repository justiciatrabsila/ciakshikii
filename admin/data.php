<?php
require '../config/config.php';

if(isset($_POST['submit'])){

    // mengambil semua data dari form ke dalam variabel lokal
    $name = htmlspecialchars($_POST['name']); // mengambil data nama yang berasal dari form 
    $description = $_POST['description'];
    $price = $_POST['price'];
    $Brand_id = $_POST['Brand_id'];
    $Category_id= $_POST['Category_id'];
    // $image = htmlspecialchars($_POST['image']);
    // $image = basename($_FILES['image'])

    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];

    // variabel array associative 
    $data = [ 
        'name' =>  $name ,
       'description' =>  $description,
        'price' =>  $price,
        'Brand_id' =>$Brand_id,
        'Category_id' =>  $Category_id,
       'image' =>  $fileName 
    ];

    $validasi = validasiData($data);

    if($validasi == 0 ){
        echo "data sudah lengkap siap di inputkan";
        $result = inputData($data, $koneksi);
        if($result) 
        { 
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
            if (in_array($fileType, $allowedTypes)) {
                // Specify the target directory for uploads
                $uploadDir = 'uploads/';
                $destinationPath = $uploadDir . basename($fileName);
                
                // Move the uploaded file to the destination directory
                if (move_uploaded_file($fileTmpPath, $destinationPath)) {
                } else {
                    echo "Error moving the uploaded file.";
                }
    
            header("location:input_product.php?status=1");
        }
        else header("location:input_product.php?errno=1");
    }
    else {
        echo "data $validasi kurang";
    }
}
}
//gambar
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Check if the file was uploaded without errors
//     if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

//         $name = $_POST['name'];
//         $description = $_POST['description'];
//         $price = $_POST['price'];

//         $fileTmpPath = $_FILES['image']['tmp_name'];
//         $fileName = $_FILES['image']['name'];
//         $fileSize = $_FILES['image']['size'];
//         $fileType = $_FILES['image']['type'];

//         // variabel array associative
//         $data = [
//         'name' => $name,
//         'description' => $description,
//         'price'=> $price,
//         'image' => $image
//         ]; 
//         // Define allowed file types
//         $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
//         if (in_array($fileType, $allowedTypes)) {
//             // Specify the target directory for uploads
//             $uploadDir = 'uploads/';
//             $destinationPath = $uploadDir . basename($fileName);
            
//             // Move the uploaded file to the destination directory
//             if (move_uploaded_file($fileTmpPath, $destinationPath)) {
//             } else {
//                 echo "Error moving the uploaded file.";
//             }

            
//         } else {
//             echo "Unsupported file type.";
//         }
//    else {
//         echo "Error uploading file.";
//     }
// }
// }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
<h3>
        <?php 
            echo $name;
        ?>
    </h3>    
    <h3>
        <?php 
            echo $description;
        ?>
    </h3>    
    <h3>
        <?= $price; ?>
    </h3>    
        
    <h1>
        <?php 
              echo "<img src='$destinationPath' alt='Uploaded Image' style='max-width: 400px;'>";
        ?>
    </h1>

    <h3>
        <?php
        echo $Brand_id
        ?>
    </h3>
    
</body>
</html> -->