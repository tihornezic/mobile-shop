<?php
$product_shuffle = $product->getData();
?>

<section id="top-sale">
    <div class="container-max-width py-5">
        <h4 class="font-baloo">Top Sales</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
                <div class="item py-2">
                    <div class="product">
                        <!-- ?? by default -->
                        <a href="#"><img src="<?php echo $item['item_image'] ?? "assets/products/1.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $item["item_price"]?></span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-14">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>