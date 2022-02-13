<?php include 'header.php';
include ("navbar.php"); ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $element) {?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="<?php echo $element['image']  ?>" alt="" class="card-img-top" width="150" height="200"/>
                        <div class="card-body">
                            <p class="card-title text-primary font-weight-bold"><?php echo $element['name']?></p>
                            <div class="row">
                                <div class="col-md-5"><p class="font-weight-bold" style="font-size: 1.5rem">$<?php echo  $element['price'] ?></p></div>
                                <div class="col-md-7"><i class="fa-solid fa-tag pt-3"> </i> <?php echo  $element['category'] ?></div>
                            </div>
                            <p class='font-weight-bold'><i class="fa-solid fa-building"></i> Brand: <?php echo  $element['brand'] ?></p>
                            <hr/>
                            <a href="action.php?pages=detail&id=<?php echo $element['id']?>" class="btn btn-outline-dark btn-block">See Detail</a>
                        </div>
                    </div>

                </div>
            <?php }?>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
