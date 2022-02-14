<?php include 'header.php'; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <img src="assets/img/<?php echo $result['image']; ?>" alt="" class="w-100" />
            </div>
            <div class="col-md-6">
                <h1><?php echo $result['name']; ?></h1>
                <h4><?php echo $result['price']; ?></h4>
                <p><?php echo $result['category']; ?> </p>
                <h4><?php echo $result['brand']; ?></h4>
                <p><?php echo $result['description']; ?></p>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
