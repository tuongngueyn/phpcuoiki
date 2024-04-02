
<?php include("Layout/css.php")?>
    <div class="page-wrapper">
        <!-- begin::header2 -->
        <?php include("Layout/header-others.php")?>
        <!-- end::header2 -->

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Wishlist<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.php">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="container">
					<table class="table table-wishlist table-mobile">
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Stock Status</th>
								<th></th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="#">
												<img src="assets/images/samsung/samsung-galaxy-z-flip5-tim-4.webp" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="#">Samsung Galaxy Z Flip 5</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">$990.00</td>
								<td class="stock-col"><span class="in-stock">In stock</span></td>
								<td class="action-col">
                                    <div class="dropdown">
									<button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-list-alt"></i>Select Options
                                    </button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">First option</a>
                                        <a class="dropdown-item" href="#">Another option</a>
                                        <a class="dropdown-item" href="#">The best option</a>
                                      </div>
                                    </div>
								</td>
								<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
							</tr>
							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="#">
												<img src="assets/images/samsung/Samsung-Galaxy-Z-Fold5-4.webp" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="#">Samsung Galaxy Z Fold 5</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">$900.00</td>
								<td class="stock-col"><span class="in-stock">In stock</span></td>
								<td class="action-col">
									<button class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</button>
								</td>
								<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
							</tr>
							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="#">
												<img src="assets/images/samsung/samsunggalaxyzflipxam4.webp" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="#">Samsung Galaxy Z Flip 4</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">$890.00</td>
								<td class="stock-col"><span class="out-of-stock">Out of stock</span></td>
								<td class="action-col">
									<button class="btn btn-block btn-outline-primary-2 disabled">Out of Stock</button>
								</td>
								<td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
							</tr>
						</tbody>
					</table><!-- End .table table-wishlist -->
	            	<div class="wishlist-share">
	            		<div class="social-icons social-icons-sm mb-2">
	            			<label class="social-label">Share on:</label>
	    					<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
	    					<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
	    					<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
	    					<a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
	    					<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
	    				</div><!-- End .soial-icons -->
	            	</div><!-- End .wishlist-share -->
            	</div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <!-- begin::footer -->
        <?php include("Layout/footer-media.php")?>
        <!-- end::footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <!-- begin:: modile menu container -->
    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="category.php">Shop</a>
                        <ul>
                            <li><a href="productIphone15.php">iPhone 15 Pro Max</a></li>
                            <li><a href="#">Pixel 7a</a></li>
                            <li><a href="#">Macbook Air M3</a></li>
                            <li><a href="#">Asus Zenfones 11</a></li>
                            <li><a href="#"><span>iPhone 11<span class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="#">Asus ROG Phone 5</a></li>
                            <li><a href="productSamsungGalaxyFold5.php">Samsung Galaxy Z Fold 5</a></li>
                            <li><a href="#"><span>Samsung Galaxy s24 Ultra<span class="tip tip-new">New</span></span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sf-with-ul">ACCESSORIES</a>
                        <ul>
                            <li><a href="category.php">Smartphones</a></li>
                            <li><a href="#"><span>Tablets<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="#">Earphones and Headphones</a></li>
                            <li><a href="#">Phone Cases</a></li>
                            <li><a href="#">Screen Protector</a></li>
                            <li><a href="#">Controllers</a></li>
                            <li><a href="#">Consoles</a></li>
                            <li><a href="#">Keyboards</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PAGES</a>
                        <ul>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="wishlist.php">Wishlist</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>

                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->
            

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <?php include("Layout/signin_register_modal.php")?>
    <!-- begin::sign in / register modal -->

    <?php include("Layout/js.php")?>