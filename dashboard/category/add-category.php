<?php
include '../database/connect.php';
$string = "SELECT * FROM category";
$sql = mysqli_query($conn, $string);

if (isset($_POST['add-category'])) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $level = $_POST['level'];
    $pid = $_POST['parentId'];

    $stringAdd = "INSERT INTO category (CodeCategory,NameCategory,Level,Pid) VALUES ('$code','$name','$level','$pid')";

    $sqlAdd = mysqli_query($conn, $stringAdd);

    echo '<script>
          window.location.href="categories.php";
         </script>';

}
?>

<!-- Modal -->
<div class="modal fade" id="add_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="col-form-label">Code</label>
                        <input type="text" class="form-control" name="code" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Level</label>
                        <select class="form-control" name="level" id="level" required>
                            <option value="0" selected>Choose level</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Parent category</label>
                        <select class="form-control" name="parentId" id="parentId" required>
                            <option value="0" selected>Choose...</option>
                            <?php while ($cate = mysqli_fetch_assoc($sql)) { ?>
                            <option value="<?php echo $cate['Id'] ?>"><?php echo $cate['NameCategory'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button name="add-category" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>