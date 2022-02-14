<?php include 'header.php'; ?>

<section class="py-5 bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card ">
                    <div class="card-header bg-success text-white font-weight-bolder text-center">
                        All Product Info
                    </div>
                    <div class="card-body">
<!--                        <form action="action.php" method="post">-->
<!--                            <div class="input-group mb-4">-->
<!--                                <input type="text" class="form-control" name="search"/>-->
<!--                                <div class="input-group-append">-->
<!--                                    <button type="submit" name="user_btn" class="btn btn-outline-success">-->
<!--                                        <i class="fa fa-search"></i>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
                        <table class="table table-bordered table-hover text-center ">
                            <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody class="">
                            <?php foreach ($users as $user) { ?>
                            <tr class="">
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['email'] ?></td>
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

<?php include 'footer.php'; ?>
