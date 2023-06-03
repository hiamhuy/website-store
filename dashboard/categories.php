<?php
include 'includes/header.php';
include 'includes/navbar.php';

include '../database/connect.php';
$string = "SELECT * FROM category";
$sql = mysqli_query($conn, $string);

?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <?php
        include 'includes/topbar.php';
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Category</h1>
            </div>
            <div class="row">
                <div class="p-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_category">Add <i
                            class="fas fa-plus"></i></button>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-4">
                    <form method="post" action="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:40px" scope="col">#</th>
                                    <th scope="col">Name Category</th>
                                    <th style="width:80px" scope="col">Level</th>
                                    <th style="width:120px" scope="col">Status</th>
                                    <th style="width:80px" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($sql) > 0) {
                                    $idx = 1;
                                    foreach ($sql as $cate) {
                                        ?>
                                <tr>
                                    <th style="width:40px" scope="row">
                                        <?php echo $idx++ ?>
                                    </th>
                                    <td>
                                        <?php echo $cate['NameCategory'] ?>
                                    </td>
                                    <td style="width:80px">
                                        <?php echo $cate['Level'] ?>
                                    </td>
                                    <td style="width:120px">
                                        <?php echo ($cate['Status']) == 2 ? 'Activate' : 'Not activated' ?>
                                    </td>
                                    <td style="width:80px">
                                        <ul class="action">
                                            <li>
                                                <a href="#edit_<?php echo $cate['Id']; ?>" data-toggle="modal"><i
                                                        class="fas fa-edit"></i>
                                                </a>
                                            </li>
                                            <li><a href="category/delete_category.php?id=<?php echo $cate['Id']; ?>"><i
                                                        class="fas fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                    <?php include('category/edit-category.php') ?>
                                </tr>

                                <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('category/add-category.php') ?>

</div>
<!-- End of Page Wrapper -->

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>