<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="action.php" method="post" enctype="multipart/form-data">
                        <h3 class="text-danger text-center mb-4"><?php echo isset($result) ? $result : ' ';  ?></h3>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control-file" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label"></label>
                            <div class="col-md-8">
                                <input type="submit" name="img_btn" class="btn btn-block btn-outline-success" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

