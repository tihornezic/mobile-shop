<?php 
    $item_id = $_GET['item_id'] ?? 1;
    foreach($product->getData() as $item) :
        if($item['item_id'] == $item_id) :
?>

<section id="product" class="py-3">
    <div class="container-max-width">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image']; ?>" class="img-fluid" alt="product">
                <div class="row pt-3 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']; ?></h5>
                <small>by <?php echo $item['item_brand'] ?></small>
                <div class="d-flex">
                    <div class="rating text-warning">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 | 1000+ answered questions</a>
                </div>
                <hr class="m-0">
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P: </td>
                        <td><strike>$<?php echo $item['item_price'] + 10; ?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price: </td>
                        <td class="font-size-20 text-danger"><span>$<?php echo $item['item_price']; ?></span><small class="text-dark font-size-14">&nbsp;&nbsp;(Included taxes)</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save: </td>
                        <td><span class="font-size-16 text-danger">$10.00</span></td>
                    </tr>
                </table>
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center">
                            <div class="color-secondary">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12 color-secondary non-text-decor">10 Days<br>Replacement</a>
                        </div>
                        <div class="return text-center mx-5">
                            <div class="color-secondary">
                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                            </div>
                            <a href="" class="font-rale font-size-12 color-secondary non-text-decor">Free<br>Shipping</a>
                        </div>
                        <div class="return text-center">
                            <div class="color-secondary">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="" class="font-rale font-size-12 color-secondary non-text-decor">3 Years<br>Warranty</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by: Jan 17 - Feb 1</small>
                    <small>Sold by: <a href="#">Daily Electronics</a> (4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <div class="row">
                    <div class="col-6 my-3">
                        <div class="color">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color: </h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-secondary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 my-3">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Quantity:</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" value="1" placeholder="1" disabled>
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="memory my-4">
                    <h6 class="font-baloo">Memory:</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h6>Product Description</h6>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque asperiores ipsum, fugit ut, voluptatum cumque, accusamus quia minima quasi nam perspiciatis ducimus. Nihil odio quis vero ratione aspernatur minima, debitis, facere obcaecati fugit omnis iste voluptates officia accusamus sapiente ipsum est sit id? Ipsam, alias!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit veritatis eum dolores in ullam, placeat accusantium aperiam atque, illo iure laborum maiores ad quae blanditiis, autem veniam totam. Facere fugit esse maiores aspernatur, animi excepturi voluptas aperiam ullam voluptatibus omnis officia. Saepe laboriosam itaque quo?</p>
            </div>
        </div>
    </div>
</section>

<?php 
    endif;
    endforeach 
?>