<?php 
require_once "../config/config.php";
require_once "../admin/data.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="view.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <?php 
                    $product = viewProduct($koneksi);

                    if($product == 0) {
                        echo 'Data Kosong';
                    }
                    else {
                ?>
                <table class=table>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Brand_id</th>
                        <th>Category_id</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php 
                    // awalan foreach 
                    $no = 1; 
                    $arrcategory = array (1=> 'Skincare', 'Haircare', 'Bodycare');
                    $arrbrand = array (1=> 'Skintific', 'Npure', 'Wardah', 'Avoskin','Somethinc');
                    foreach($product as $data) {
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['description'] ?></td>
                        <td><?= $data['price'] ?></td>
                        <td><?= $arrbrand [$data['brand_id']] ?></td>
                        <td><?= $arrcategory [$data['category_id']] ?></td>
                        <td><?= $data['image'] ?></td>
                        <td><a class="edit-delete"  href="#">Edit</a></td>
                        <td><button class="btn btn-primary">
                        <a class="edit-delete" href="?del=<?= $data['id'] ?>">Delete</a></td>
                        </button>
                    </tr>
                    <?php 
                       $no ++;
                    }
                        // akhiran foreach
                    ?>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>