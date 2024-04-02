<?php include("Layout/css.php") ?>
<link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">

<div class="page-wrapper">
    <!-- begin::header -->
    <?php include("Layout/header-others.php") ?>
    <!-- end::header -->

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                </ol>

                <nav class="product-pager ml-auto" aria-label="Product">
                    <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                        <i class="icon-angle-left"></i>
                        <span>Prev</span>
                    </a>

                    <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                        <span>Next</span>
                        <i class="icon-angle-right"></i>
                    </a>
                </nav><!-- End .pager-nav -->
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="assets/images/samsung/samsunggalaxyzflipxam4.webp" data-zoom-image="assets/images/samsung/samsunggalaxyzflipxam4.webp" alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        <a class="product-gallery-item active" href="#" data-image="assets/images/samsung/samsunggalaxyzflipxam4.webp" data-zoom-image="assets/images/samsung/samsunggalaxyzflipxam4.webp">
                                            <img src="assets/images/samsung/samsunggalaxyzflipxam4.webp" alt="product side">
                                        </a>

                                        <a class="product-gallery-item" href="#" data-image="assets/images/samsung/samsung-galaxy-z-flip-xam-6.webp" data-zoom-image="assets/images/samsung/samsung-galaxy-z-flip-xam-6.webp">
                                            <img src="assets/images/samsung/samsung-galaxy-z-flip-xam-6.webp" alt="product cross">
                                        </a>

                                        <a class="product-gallery-item" href="#" data-image="assets/images/samsung/samsung-galaxy-z-flip-xam-3.webp" data-zoom-image="assets/images/samsung/samsung-galaxy-z-flip-xam-3.webp">
                                            <img src="assets/images/samsung/samsung-galaxy-z-flip-xam-3.webp" alt="product with model">
                                        </a>

                                        <a class="product-gallery-item" href="#" data-image="assets/images/samsung/samsung-galaxy-z-flip-xam-1.webp" data-zoom-image="assets/images/samsung/samsung-galaxy-z-flip-xam-1.webp">
                                            <img src="assets/images/samsung/samsung-galaxy-z-flip-xam-1.webp" alt="product back">
                                        </a>
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="product-details product-details-centered">
                                <h1 class="product-title">Samsung Galaxy Z Flip 5 512GB</h1><!-- End .product-title -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                                </div><!-- End .rating-container -->

                                <div class="product-price">
                                    $999.00
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p>The compact look is full of charm and now with Flex Window, our largest screen cover.
                                        <br>Get a great incentive package and save up to 2 million VND when old autumn renews with the brand new Galaxy Z Flip5.
                                    </p>
                                </div><!-- End .product-content -->

                                <div class="details-filter-row details-row-size">
                                    <label>Color:</label>

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #ebdea8;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .details-filter-row -->

                                <div class="details-filter-row details-row-size">
                                    <label for="size">Storage:</label>
                                    <div class="select-custom">
                                        <select name="size" id="size" class="form-control">
                                            <option value="#" selected="selected">64GB</option>
                                            <option value="s">128GB</option>
                                            <option value="m">256GB</option>
                                            <option value="l">512GB</option>
                                            <option value="xl">1TB</option>
                                        </select>
                                    </div><!-- End .select-custom -->

                                    <!-- <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a> -->
                                </div><!-- End .details-filter-row -->

                                <div class="product-details-action">
                                    <div class="details-action-col">
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->

                                        <a href="#" class="btn-product btn-cart add-to-cart" data-id="28" data-title="Samsung Galaxy Z Flip 5" data-image="assets/images/samsung/samsunggalaxyzflipxam4.webp" data-price="899.00"><span>add to cart</span></a>
                                    </div><!-- End .details-action-col -->

                                    <div class="details-action-wrapper">
                                        <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                    </div><!-- End .details-action-wrapper -->
                                </div><!-- End .product-details-action -->

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category:</span>
                                        <a href="#">Product</a>,
                                        <a href="#">Samsung</a>,
                                        <a href="#">Midnight</a>
                                    </div><!-- End .product-cat -->

                                    <div class="social-icons social-icons-sm">
                                        <span class="social-label">Share:</span>
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div>
                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <div class="row">
                                    <h2>Product Information</h2>
                                </div>
                                <div class="row">
                                    <p>
                                        <br>Galaxy Z Flip5 for the first time integrates a 3.4-inch Flex Window multi-function external screen that turns on personality.1 Compact and eye-catching from all angles, ready to go with you everywhere.
                                        <br>Fits perfectly – both in life and in your pocket. Flex Window - Versatile external display that you can freely customize. Experience the Selfie masterpiece. And enjoy long battery life, complete all the fun. It's Time to Get Ready for Flexible Entry
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center">
                                        <video id="video1" autoplay muted>
                                            <source src="assets/images/samsung/galaxy-z-flip5-highlights-overview-flex-window.webm" type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <video autoplay muted>
                                            <source src="assets//images/samsung/galaxy-z-flip5-highlights-overview-flex-mode.webm">
                                        </video>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center">
                                        <p style="padding-top: 100px;">Brilliant night photos with Nightography Night Eye Camera
                                            The Galaxy Z Flip5's wide-angle camera squeezes even more of the scene into the frame. Whether or not you want to open the camera is up to you — just swipe up on the Camera icon on the Flex Window and start recording with FlexCam. And let the camera roll because with 4K Night Video, a lack of sunlight doesn't mean a lack of quality. 13
                                            *Photos are for illustrative purposes. Actual appearance may vary.</p>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <video autoplay muted>
                                            <source src="assets/images/samsung/galaxy-z-flip5-highlights-camera-video.webm" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center">
                                        <video autoplay muted>
                                            <source src="assets/images/samsung/galaxy-z-flip5-highlights-flexwindow-cross-gesture-a.webm" type="video/mp4">
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <p style="padding-top: 110px;">Reply to messages with the QWERTY keyboard, make calls, check the weather or pull out your wallet - you can do it all on the versatile, spacious and bright Flex Window external display.1,14,15 Available now More watch faces and cross gestures you know from across the Galaxy ecosystem.
                                            <br>*Photos are for illustrative purposes. Actual appearance may vary.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <div class="row">
                                    <h2>The design doesn't forget to pay attention to the planet</h2>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center">
                                        <img src="assets/images/samsung/galaxy-z-flip5-highlights-sustainability.jpg">
                                    </div>
                                    <div class="col-6">
                                        <p style="padding-top: 100px;">Galaxy Z Flip5 and Fold5 use a wider variety of recycled materials than previous generations, including pre-consumer recycled glass and aluminum and post-consumer recycled plastic, sourced from fishing nets, water barrels and bottles Discarded PET jars.27,28
                                            *Simulation images are for illustration purposes only. Actual UI may vary.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <h2>The Most Powerful Processor Ever on a Galaxy Fold</h2>
                                </div>
                                <div class="row">
                                    Snapdragon 8 Gen 2 Mobile Platform for Galaxy takes you to the next level of performance.19 Experience smoother graphics, faster AI, and improved battery performance.
                                    <br>*Improved AP performance shown compared to Galaxy Z Flip4. Actual performance will depend on user environment, conditions and pre-installed software and applications.
                                </div>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <h3>Delivery & returns</h3>
                                <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                    We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                            <div class="reviews">
                                <h3>Reviews (2)</h3>
                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">Rihana Johnson</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">6 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Good</h4>

                                            <div class="review-content">
                                                <p>After some hesitation, I decided to try the Samsung Galaxy Z Flip5 as a replacement for my iPhone 12. I wanted to see if this folding device would be suitable for both work and entertainment. Join me as I share my experience with this smartphone and whether it's worth the investment.</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->

                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">John Doe</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">5 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Very good</h4>

                                            <div class="review-content">
                                                <p>This is my personal psychological feeling: I find that I can focus more on my work when using the Galaxy Z Flip5. It only has the effect of checking the time or receiving quick notifications, so it does not significantly affect my concentration. However, it also helps me to make the most out of my devices in a more reasonable way.</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->

                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="productSamsungGalaxyFold5.php">
                                <img src="assets/images/samsung/galaxy-z-fold-5-kem-1.webp" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Samsung</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Samsung Galaxy Z Fold 5 512GB</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $890.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #806b3e;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-out">Out of Stock</span>
                            <a href="product.php">
                                <img src="assets/images/samsung/sm-s901_galaxys22_front_phantomwhite_211122.webp" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Samsung</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Samsung Galaxy S22 265GB</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="out-price">$790.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                <a href="#" class="active" style="background: #d4d1ce;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <a href="product.php">
                                <img src="assets/images/samsung/s23-ultra-xanh.webp" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Samsung</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Samsung Galaxy S23 Ultra 5G 1TB</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $790.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 1 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #8b513d;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #d2b99a;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/samsung/samsung-galaxy-z-flip5-tim-4.webp" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Samsung</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Samsung Galaxy Z Flip 4 512GB</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $890.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #703882;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #d4d1ce;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/samsung/samsung-galaxy-a54.webp" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart add-to-cart" data-id="26" data-title="Samsung Galaxy A54 5G 256GB" data-image="assets/images/samsung/samsung-galaxy-a54.webp" data-price="899.00"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Samsung</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Samsung Galaxy A54 5G 256GB</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $499.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #151516;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #d4d1ce;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #cbc8a5;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    <!-- begin::footer -->
    <?php include("Layout/footer-media.php") ?>
    <!-- begin::footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<!-- begin::mobile-menu-container -->
<?php include("Layout/mobile_menu_container.php") ?>
<!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<?php include("Layout/signin_register_modal.php") ?>
<!-- Sign in / Register End .modal -->

<?php include("Layout/js.php") ?>
<script src="assets/js/jquery.elevateZoom.min.js"></script>