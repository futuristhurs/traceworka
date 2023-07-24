<?php session_start(); 
$pageTitle = 'Category';
?>


            <?php
            $slug = $_GET['category'];

            $conn = new PDO("mysql:host=localhost;dbname=tracemm", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {
                $stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
                $stmt->execute(['slug' => $slug]);
                $cat = $stmt->fetch();
                $catid = $cat['id'];
            } catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }

            $conn = null;
            ?>
            <?php include "includes/header.php"; 
            // include 'assets/css/product.css'
            ?>

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title"><?php echo $cat['name']; ?></h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                                                <?php
// $conn = new PDO("mysql:host=localhost;dbname=tracemm", "root", "");

// try {
//     $inc = 3;
//     $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
//     $stmt->execute(['catid' => $catid]);

//     foreach ($stmt as $row) {
//         $image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
//         $inc = ($inc == 3) ? 1 : $inc + 1;
//         if ($inc == 1) echo "<div class='row'>";
//         echo "
//             <div class='col-md-4 mb-4'>
//                 <div class='product'>
//                     <span class='badges'>
//                         <span class='new'>New</span>
//                     </span>
//                     <div class='thumb'>
//                         <a href='product.php?product=" . $row['slug'] . "' class='image'>
//                             <img src='" . $image . "' alt='Product' />
//                             <img class='hover-image' src='" . $image . "' alt='Product' />
//                         </a>
//                     </div>
//                     <div class='content'>
//                         <span class='category'><a href='#'>Accessories</a></span>
//                         <h5 class='title'><a href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a></h5>
//                         <span class='price'>
//                             <span class='new'>&#36; " . number_format($row['price'], 2) . "</span>
//                         </span>
//                     </div>
//                     <div class='actions'>
//                         <button title='Add To Cart' class='action add-to-cart' data-bs-toggle='modal' data-bs-target='#exampleModal-Cart'><i class='pe-7s-shopbag'></i></button>
//                         <button class='action wishlist' title='Wishlist' data-bs-toggle='modal' data-bs-target='#exampleModal-Wishlist'><i class='pe-7s-like'></i></button>
//                         <button class='action quickview' data-link-action='quickview' title='Quick view' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='pe-7s-look'></i></button>
//                         <button class='action compare' title='Compare' data-bs-toggle='modal' data-bs-target='#exampleModal-Compare'><i class='pe-7s-refresh-2'></i></button>
//                     </div>
//                 </div>
//             </div>
//         ";

//         if ($inc == 3) echo "</div>";
//     }

//     if ($inc == 1) echo "<div class='col-md-4 mb-4'></div><div class='col-md-4 mb-4'></div></div>";
//     if ($inc == 2) echo "<div class='col-md-4 mb-4'></div></div>";
// } catch (PDOException $e) {
//     echo "There is some problem in connection: " . $e->getMessage();
// }
// $conn = null;
?>


                                                    <!-- <div class="product">
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
                                                    </div> -->
                                                </div>

<!-- PHP Code for Product Blocks -->
<?php
$conn = new PDO("mysql:host=localhost;dbname=tracemm", "root", "");

try {
    $inc = 3;
    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
    $stmt->execute(['catid' => $catid]);

    foreach ($stmt as $row) {
        $image = (!empty($row['photo'])) ? 'images/' . $row['photo'] : 'images/noimage.jpg';
        $inc = ($inc == 3) ? 1 : $inc + 1;
        if ($inc == 1) echo "<div class='row'>";
        echo "
            <div class='col-md-4 mb-4'>
                <div class='product'>
                    <span class='badges'>
                        <span class='new'>New</span>
                    </span>
                    <div class='thumb'>
                        <a href='product.php?product=" . $row['slug'] . "' class='image'>
                            <img src='" . $image . "' alt='Product' />
                            <img class='hover-image' src='" . $image . "' alt='Product' />
                        </a>
                    </div>
                    <div class='content'>
                        <span class='category'><a href='#'>Accessories</a></span>
                        <h5 class='title'><a href='product.php?product=" . $row['slug'] . "'>" . $row['name'] . "</a></h5>
                        <span class='price'>
                            <span class='new'>&#36; " . number_format($row['price'], 2) . "</span>
                        </span>
                    </div>
                    <div class='actions'>
                        <button title='Add To Cart' class='action add-to-cart' data-bs-toggle='modal' data-bs-target='#exampleModal-Cart'><i class='pe-7s-shopbag'></i></button>
                        <button class='action wishlist' title='Wishlist' data-bs-toggle='modal' data-bs-target='#exampleModal-Wishlist'><i class='pe-7s-like'></i></button>
                        <button class='action quickview' data-link-action='quickview' title='Quick view' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='pe-7s-look'></i></button>
                        <button class='action compare' title='Compare' data-bs-toggle='modal' data-bs-target='#exampleModal-Compare'><i class='pe-7s-refresh-2'></i></button>
                    </div>
                </div>
            </div>
        ";

        if ($inc == 3) echo "</div>";
    }

    if ($inc == 1) echo "<div class='col-md-4 mb-4'></div><div class='col-md-4 mb-4'></div></div>";
    if ($inc == 2) echo "<div class='col-md-4 mb-4'></div></div>";
} catch (PDOException $e) {
    echo "There is some problem in connection: " . $e->getMessage();
}
$conn = null;
?>
<!-- End of PHP Code for Product Blocks -->



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
        <?php
        include 'includes/footer.php'
        ?>
        <!-- Footer Area End -->
    </div>
    <!-- Modal -->
    
    <!-- Modal end -->
   
    <!-- Modal compare -->
   
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