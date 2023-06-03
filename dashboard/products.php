<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<?php
include '../database/connect.php';
$string = "SELECT * FROM products";
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
                <h1 class="h3 mb-0 text-gray-800">Products</h1>
            </div>

            <div class="row">
                <div class="p-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_products">Add <i
                            class="fas fa-plus"></i></button>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-4">
                    <form action="" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:40px" scope="col">#</th>
                                    <th style="width:120px" scope="col">Image</th>
                                    <th scope="col">Name Product</th>
                                    <th style="width:80px" scope="col">Price</th>
                                    <th style="width:80px" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (mysqli_num_rows($sql) > 0) {
                                    $idx = 1;
                                    foreach ($sql as $row) { ?>
                                <tr>
                                    <th style="width:40px" scope="row">
                                        <?php echo $idx++ ?>
                                    </th>
                                    <td style="width:120px">
                                        <div class="thumbnail object-cover">
                                            <img src="../assets/image/products/<?php echo $row['Image']; ?>" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $row['ProductName'] ?>
                                    </td>
                                    <td style="width:80px">
                                        <?php echo $row['Price'] ?>
                                    </td>
                                    <td style="width:80px">
                                        <ul class="action">
                                            <li>
                                                <a href="#edit_<?php echo $row['Id']; ?>" class="btn-edit-form"
                                                    data-toggle="modal">
                                                    <i class="fas fa-edit"></i></a>
                                            </li>
                                            <li>
                                                <a href="product/delete_products.php?id=<?php echo $row['Id']; ?>">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <?php include('product/edit-products.php'); ?>
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
    <?php include('product/add-products.php') ?>

</div>
<!-- End of Page Wrapper -->

<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>