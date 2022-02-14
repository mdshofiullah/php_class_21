<?php include 'header.php'?>

<section class="py-5 bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card ">
                    <div class="card-header bg-success text-white font-weight-bolder text-center">
                        Search Result
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
                        <?php if (isset($result['Id'])) { ?>
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

                                <tbody>
                                <tr class="">
                                    <td><?php echo $result['Id'] ?></td>
                                    <td><?php echo $result['name'] ?></td>
                                    <td><?php echo $result['category'] ?></td>
                                    <td><?php echo $result['brand'] ?></td>
                                    <td><?php echo $result['price'] ?></td>
                                </tr>
                                </tbody>

                            </table>
                        <?php } else { ?>
                            <h1 class="text-danger text-center">Opps..........No result Found</h1>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'?>
