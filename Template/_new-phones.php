<?php
    shuffle($product_shuffle);
?>

<section id="new-phones">
    <div class="container-max-width">
        <h4 class="font-baloo">New Phones</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php array_map(function ($item) { ?>
                <div class="item py-2 bg-light">
                    <div class="product">
                        <a href="#"><img src="<?php echo $item['item_image'] ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?></h6>
                            <div class="rating text-warning">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price'] ?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-14">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
    <br>
</section>