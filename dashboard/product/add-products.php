<?php
include '../database/connect.php';
$string = "SELECT * FROM category";
$sql = mysqli_query($conn, $string);

if (isset($_POST['btn-add'])) {
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $categoryId = $_POST['categoryId'];
    $price = $_POST['price'];
    $information = $_POST['information'];

    $stringAdd = "INSERT INTO products (Image, ProductCode, ProductName, CategoryId, Price, InfoProduct)
                 VALUES('$image', '$code','$name','$categoryId','$price','$information')";

    $sqlAdd = mysqli_query($conn, $stringAdd);

    move_uploaded_file($image_tmp, '../assets/image/products/' . $image);

    echo '<script>
         window.location.href="products.php";
        </script>';

}

?>

<!-- Modal -->
<div class="modal fade" id="add_products" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="img_product"
                            accept="image/png, image/jpeg">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Code</label>
                        <input type="text" class="form-control" name="code" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Category</label>
                        <select class="form-control" name="categoryId" id="categoryId" required>
                            <option value="0" selected>Choose...</option>
                            <?php while ($cate = mysqli_fetch_assoc($sql)) { ?>
                            <option value="<?php echo $cate['Id'] ?>"><?php echo $cate['NameCategory'] ?></option>
                            <?php } ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Information</label>
                        <textarea class="form-control" name="information" id="information" cols="30"
                            rows="10"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btn-add" name="btn-add" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>