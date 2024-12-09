<?php
require_once "../config/config.php";
    require "data.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fashion_catalog : Input Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input Data Product </h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="namaProduct" class="form-label">Name </label>
                        <input type="text" class="form-control" name="name" >
                    </div>
                    <div class="mb-3">
                        <label for="deskProduct">Description</label>
                        <textarea name="description" class="form-control" placeholder="Leave a comment here" id="" for="deskProduct"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="hargaProduct" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" >
                    </div>
                    <div class="mb-3">
                        <label for="brandProduct" class="form-label">Brand_id</label>
                        <select class="form-select" name="Brand_id">
                                <option selected value="0" >--Pilih Brand--</option>
                                <option value="1">Skintific</option>
                                <option value="2">Npure</option>
                                <option value="3">Wardah</option>
                                <option value="4">Avoskin</option>
                                <option value="5">Somethic</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kategoriProduct" class="form-label">Category_id</label>
                        <select class="form-select" name="Category_id">
                                <option selected value="0" >--Pilih Category--</option>
                                <option value="1">Skincare</option>
                                <option value="2">Haircare</option>
                                <option value="3">Bodycare</option>

                        </select>
                    </div>
                  
                        <div class="mb-3">
                        <label for="image" class="form-label">Image</label><br>
                        <input type="file" name="image" placeholder="Image" id="">
                        </div>

                    <div class="mb-3">
                        <input type="submit" value="Input Data Product" class="btn btn-primary" name="submit">
                    </div>


                </form>
            </div>
        </div>
    </div>
    
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
