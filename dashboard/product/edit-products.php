<?php
include '../database/connect.php';
$string = "SELECT * FROM category";
$sql = mysqli_query($conn, $string);


if (isset($_POST['btn-edit'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $image = $_POST['image'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $categoryId = $_POST['categoryId'];
        $price = $_POST['price'];
        $information = $_POST['information'];

        $stringUpdate = "UPDATE products SET Image='$image', ProductCode='$code', ProductName='$name', CategoryId='$categoryId', Price='$price', InfoProduct='$information' WHERE Id='$id'";

        $sqlUpdate = mysqli_query($conn, $stringUpdate);

        echo '<script>
          window.location.href="products.php";
         </script>';

    } else {
        echo 'can not found id product';
    }

}

?>

<!-- Modal -->
<div class="modal fade" id="edit_<?php echo $row['Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form action="products.php?id=<?php echo $row['Id']; ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $row["Id"] ?>">
                        <input hidden class="form-control" type="text" name="image" id="image_value"
                            value="<?php echo $row['Image']; ?>">
                    </div>
                    <div class="form-group">
                        <input hidden type="text" class="form-control" name="code"
                            value="<?php echo $row['ProductCode']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['ProductName']; ?>" name="name"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Category</label>
                        <select class="form-control" name="categoryId" id="categoryId" required>
                            <option value="0">Choose...</option>
                            <?php while ($cate = mysqli_fetch_assoc($sql)) {
                                if ($row['CategoryId'] == $cate['Id']) { ?>
                            <option value="<?php echo $row['CategoryId']; ?>" selected>
                                <?php echo $cate['NameCategory'] ?>
                            </option>
                            <?php } else { ?>
                            <option value="<?php echo $cate['Id'] ?>"><?php echo $cate['NameCategory'] ?></option>
                            <?php }
                            } ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price"
                            value="<?php echo $row['Price']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Information</label>
                        <textarea class="form-control" name="information" id="information" cols="30"
                            rows="10"><?php echo $row['InfoProduct']; ?></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn-edit" name="btn-edit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>