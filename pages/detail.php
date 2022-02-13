<?php include ("header.php");
include ("navbar.php"); ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($details as $element) {?>
                <div class="col-md-8 mb-4 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="<?php echo $element['image']  ?>" alt="image" class="card-img-top p-3"  height="300"/>
                                <h2 class="card-title px-5"><?php echo $element['name']?></h2>

                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p class="font-weight-bold" style="font-size: 2rem">$<?php echo  $element['price'] ?></b></p>
                                    <p class="font-weight-bold">brand: <?php echo  $element['brand'] ?></p>
                                    <p class="font-weight-bold">category: <?php echo  $element['category'] ?></p>
                                    <hr />
                                    <b class="font-weight-bold">Description: </b>
                                    <br />
                                    <p><?php echo  $element['description'] ?></p>
                                    <hr />
                                    <a href="action.php?pages=products" class="btn btn-outline-dark">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php }?>
        </div>
    </div>

</section>

<?php include ("footer.php")?>

