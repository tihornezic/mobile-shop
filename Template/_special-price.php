<!-- $product_shuffle from _top-sale.php is here as well! -->

<?php 
    $brands = array_map(function($pro){return $pro['item_brand']; }, $product_shuffle);
    $unique_brands = array_unique($brands);
    sort($unique_brands);
    // print_r($unique_brands);
?>

<section id="special-price">
    <div class="container-max-width">
        <h4 class="font-baloo">Special Price</h4>
        <div id="filters" class="button-group text-end font-baloo">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <?php 
            array_map(function($brand) {
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
            }, $unique_brands);
            ?>
            <!-- <button class="btn" data-filter=".Samsung">Samsung</button> -->
        </div>
        <div class="grid">
            <!-- array_map iterates through $product_shuffle one by one -->
            <!-- and display them using the function -->
            <?php array_map(function ($item) { ?>
                <div class="grid-item border <?php echo $item['item_brand']; ?>">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="<?php echo $item['item_image']; ?>" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name']; ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?php echo $item['item_price']; ?></span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>