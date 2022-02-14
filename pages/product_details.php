<?php include 'header.php'?>

<section class="py-5 bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card ">
                    <div class="card-header bg-success text-white font-weight-bolder text-center">
                        All Product Info
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" name="search"/>
                                <div class="input-group-append">
                                    <button type="submit" name="search_btn" class="btn btn-outline-success">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody class="">
                            <?php foreach ($products as $product) { ?>
                            <tr class="">
                                <td><?php echo $product['Id'] ?></td>
                                <td><?php echo $product['name'] ?></td>
                                <td><?php echo $product['category'] ?></td>
                                <td><?php echo $product['brand'] ?></td>
                                <td><?php echo $product['price'] ?></td>
                            </tr>
                            </tbody>
                            <?php } ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'?>
