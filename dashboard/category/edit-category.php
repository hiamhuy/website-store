<?php
include '../database/connect.php';
$string = "SELECT * FROM category";
$sql = mysqli_query($conn, $string);

if (isset($_POST['btn-cate-edit'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $level = $_POST['level'];
        $pid = $_POST['parentId'];
        $status = $_POST['status'];

        $_parentId = null;
        if ($pid != null) {
            $_parentId = $pid;
        }

        $stringUpdate = "UPDATE category SET CodeCategory='$code', NameCategory='$name', Status='$status', Level='$level', Pid='$_parentId' WHERE Id='$id'";

        $sqlUpdate = mysqli_query($conn, $stringUpdate);

        echo '<script>
          window.location.href="categories.php";
         </script>';

    } else {
        echo 'can not found id category';

    }

}
?>

<!-- Modal -->
<div class="modal fade" id="edit_<?php echo $cate['Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="<?php echo $cate["Id"] ?>">
                    <div class="form-group">
                        <label class="col-form-label">Code</label>
                        <input type="text" id="code" class="form-control" name="code"
                            value="<?php echo $cate['CodeCategory']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Name</label>
                        <input type="text" id="name" class="form-control" name="name"
                            value="<?php echo $cate['NameCategory']; ?>">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Level</label>
                        <select class="form-control" name="level" id="level" required>
                            <option value="0">Choose...</option>
                            <?php if ($cate['Level'] == 1) { ?>
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <?php } else if ($cate['Level'] == 2) { ?>
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <?php } else { ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3" selected>3</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Parent category</label>
                        <select class="form-control" name="parentId" id="parentId" required>
                            <option value="0">Choose...</option>
                            <?php while ($category = mysqli_fetch_assoc($sql)) {
                                if ($cate['Pid'] == $category['Id']) { ?>
                            <option value="<?php echo $cate['Pid'] ?>" selected><?php echo $category['NameCategory'] ?>
                            </option>
                            <?php } else { ?>
                            <option value="<?php echo $cate['Id'] ?>"><?php echo $category['NameCategory'] ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Status</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="0">Choose...</option>
                            <?php
                            if ($cate['Status'] == 2) { ?>
                            <option value="2" selected>Active
                            </option>
                            <option value="1">Not activated</option>
                            <?php } else { ?>
                            <option value="2">Active
                            <option value="1" selected>Not activated</option>
                            <?php }
                            ?>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="btn-cate-edit" name="btn-cate-edit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>