<?php session_start(); 
include "includes/header.php";
?>


        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Product Page</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Shop</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Shop Page Start  -->
        <div class="shop-category-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Shop Top Area Start -->
                        <div class="shop-top-bar d-flex">
                            <p class="compare-product"> <span>12</span> Product Found of <span>30</span></p>
                            <!-- Left Side End -->
                            <div class="shop-tab nav">
                                <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </button>
                                <button data-bs-target="#shop-list" data-bs-toggle="tab">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </button>
                            </div>
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Sort By:</p>
                                </div>
                                <!-- Single Wedge End -->
                                <div class="header-bottom-set dropdown">
                                    <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                        <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                        <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                        <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                        <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                        <li><a class="dropdown-item" href="#">Sort By old</a></li>
                                    </ul>
                                </div>
                                <!-- Single Wedge Start -->
                            </div>
                            <!-- Right Side End -->
                        </div>
                        <!-- Shop Top Area End -->
                        <!-- Shop Bottom Area Start -->
                        <div class="shop-bottom-area">
                            <!-- Tab Content Area Start -->
                            <div class="row">
                                <div class="col">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="shop-grid">
                                            <div class="row mb-n-30px">
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">New</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/1.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="sale">-10%</span>
                                                        <span class="new">New</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/2.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Bluetooth Headphone
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="old">$48.50</span>
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">Sale</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/3.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Smart Music Box
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">New</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/4.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                    </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/5.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/5.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Smart Hand Watch
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="sale">-8%</span>
                                                        <span class="new">Sale</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/6.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Smart Table Camera
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="old">$138.50</span>
                                                            <span class="new">$112.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">Sale</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/7.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Round Pocket Router
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="sale">-5%</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/8.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="old">$260.00</span>
                                                            <span class="new">$238.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">New</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/1.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">New</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/2.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="sale">-8%</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/4.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/4.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="old">$38.50</span>
                                                            <span class="new">$30.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">Sale</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/3.webp" alt="Product" />
                                                                <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">Accessories</a></span>
                                                            <h5 class="title"><a href="single-product.html">Modern Smart Phone
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">$38.50</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                    class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade mb-n-30px" id="shop-list">
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/1.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Modern Smart Phone</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/2.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/2.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Bluetooth Headphone </a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/3.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">Sale</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Smart Music Box</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/4.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/4.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Air Pods 25Hjkl Black</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/5.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/6.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Smart Hand Watch</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/7.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/7.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Smart Table Camera</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/8.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/8.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Round Pocket Router</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/1.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/2.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Power Bank 10000Mhp</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$58.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/3.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/3.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Modern Smart Phone</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/4.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/5.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">Sale</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Bluetooth Headphone </a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/6.webp" alt="Product" />
                                                                    <img class="hover-image" src="assets/images/product-image/7.webp" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                <span class="sale">-10%</span>
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">Accessories</a></span>
                                                                <h5 class="title"><a href="single-product.html">Smart Music Box</a></h5>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                    sed do eiusmodol tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veni quis nostrud
                                                                    exercitation ullamco laboris </p>
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="old">$48.50</span>
                                                                <span class="new">$38.50</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i
                                                                        class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i
                                                                            class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i
                                                                            class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content Area End -->
                            <!--  Pagination Area Start -->
                            <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                                <div class="pages">
                                    <ul>
                                        <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li class="li"><a class="page-link" href="#">1</a></li>
                                        <li class="li"><a class="page-link active" href="#">2</a></li>
                                        <li class="li"><a class="page-link" href="#">3</a></li>
                                        <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--  Pagination Area End -->
                        </div>
                        <!-- Shop Bottom Area End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Page End  -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/images/logo/footer-logo.png" alt=""></a>
                                    </div>
                                    <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ incididunt ut labore
                                    </p>
                                    <ul class="link-follow">
                                        <li>
                                            <a class="m-0" title="Twitter" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a title="Tumblr" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Facebook" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Instagram" target="_blank" rel="noopener noreferrer" href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Services</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">My Account</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link" href="my-account.html">My Account</a></li>
                                                <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                                <li class="li"><a class="single-link" href="cart.html">Shopping cart</a></li>
                                                <li class="li"><a class="single-link" href="shop-left-sidebar.html">Shop</a></li>
                                                <li class="li"><a class="single-link" href="login.html">Services Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Contact Info</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Address: Your Address Goes Here.</p>
                                        <p class="phone">Phone/Fax:<a href="tel:0123456789"> 0123456789</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com"> demo@example.com</a></p>
                                        <p class="mail"><a href="https://demo@example.com/"> demo@example.com</a></p>
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="line-shape-top line-height-1">
                            <div class="row flex-md-row-reverse align-items-center">
                                <div class="col-md-6 text-center text-md-end">
                                    <div class="payment-mth"><a href="#"><img class="img img-fluid" src="assets/images/icons/payment.png" alt="payment-image"></a></div>
                                </div>
                                <div class="col-md-6 text-center text-md-start">
                                    <p class="copy-text"> © 2022 <strong>Hmart</strong> Made With <i class="fa fa-heart"
                                        aria-hidden="true"></i> By <a class="company-name" href="https://themeforest.net/user/codecarnival/portfolio">
                                            <strong> Codecarnival </strong></a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>
    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/1.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/2.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/3.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/4.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/zoom-image/5.webp" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/small-image/1.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/small-image/2.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/small-image/3.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/small-image/4.webp" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/small-image/5.webp" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Modern Smart Phone</h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                                </div>
                                <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmll tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exet commodo consequat. Duis aute irure dolor</p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>SKU:</span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">ETC</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">Phone</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="assets/images/icons/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1"   aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to cart successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- Modal wishlist -->
    <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1"   aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to Wishlist successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Modal compare -->
    <div class="modal customize-class fade" id="exampleModal-Compare" tabindex="-1"   aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="pe-7s-close"></i></button>
                    <div class="tt-modal-messages">
                        <i class="pe-7s-check"></i> Added to compare successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/scrollUp.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>

    <!-- Minify Version -->
    <!-- <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/main.min.js"></script> -->

    <!--Main JS (Common Activation Codes)-->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/shop-3-column.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 08:38:06 GMT -->
</html>