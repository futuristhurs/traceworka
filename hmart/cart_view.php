<?php session_start(); 
$pageTitle = "Cart page"?>

<?php 
include 'includes/header.php'?>

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Cart</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
      <style>
   /* Cart Area */
/* Cart Area */
.cart-main-area {
  margin-bottom: 50px;
}

.cart-page-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 30px;
}

.table-content {
  width: 100%;
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
}

th,
td {
  padding: 15px;
  text-align: left;
}

thead th {
  background-color: #f5f5f5;
  font-weight: bold;
}

tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

tbody tr:hover {
  background-color: #f5f5f5;
}

.cart-remove {
  display: inline-block;
  color: #f00;
  cursor: pointer;
}

.cart-remove:hover {
  color: #d00;
}

.cart-quantity {
  width: 40px;
  text-align: center;
}

/* Reduce the size of the images */
.product-thumbnail img {
  width: 60px;
  height: 60px;
  object-fit: cover; /* This will make sure the image maintains its aspect ratio and covers the whole container */
}

/* Checkout button */
#paypal-button {
  margin-top: 20px;
}

/* Styling for the login link */
.cart-login-link {
  color: #007bff;
}

.cart-login-link:hover {
  text-decoration: underline;
}


        </style>
        <!-- Cart Area Start -->
    <div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                                <!-- Cart items will be dynamically loaded here -->
                            </tbody>
                        </table>
                    </div>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo "<div id='paypal-button'></div>";
                    } else {
                        echo "<h4>You need to <a href='login.php'>Login</a> to checkout.</h4>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

                          
        <!-- Footer Area Start -->
        <?php include 'includes/footer.php'?>
       
        <!-- Footer Area End -->
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
    <!-- <script src="cart-operation.js"></script> -->

    <script>
        // Function to load cart items from the server
        function loadCartItems() {
            $.ajax({
                url: 'cart_fetch.php', // Replace this with the correct path to your cart_fetch.php file.
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    if (!response.error) {
                        $('#cart-items').html(response.list);
                    }
                }
            });
        }

        // Function to handle adding items to the cart
        function addToCart(productId, quantity) {
            $.ajax({
                url: 'cart_add.php', // Replace this with the correct path to your cart_add.php file.
                type: 'POST',
                data: {
                    id: productId,
                    quantity: quantity
                },
                dataType: 'json',
                success: function (response) {
                    if (!response.error) {
                        alert(response.message);
                        loadCartItems(); // Reload cart items after successful addition
                    } else {
                        alert('An error occurred while adding the product to the cart.');
                    }
                },
                error: function () {
                    alert('An error occurred while adding the product to the cart.');
                }
            });
        }

        // Function to handle deleting items from the cart
        function removeFromCart(cartId) {
            $.ajax({
                url: 'cart_delete.php', // Replace this with the correct path to your cart_delete.php file.
                type: 'POST',
                data: {
                    id: cartId
                },
                dataType: 'json',
                success: function (response) {
                    if (!response.error) {
                        loadCartItems(); // Reload cart items after successful deletion
                    }
                }
            });
        }

        // Function to handle updating item quantity in the cart
        function updateCartQuantity(cartId, newQuantity) {
            $.ajax({
                url: 'cart_update.php', // Replace this with the correct path to your cart_update.php file.
                type: 'POST',
                data: {
                    id: cartId,
                    qty: newQuantity
                },
                dataType: 'json',
                success: function (response) {
                    if (!response.error) {
                        loadCartItems(); // Reload cart items after successful update
                    }
                }
            });
        }

        // Attach click event handlers for the add-to-cart buttons
        $(document).on('click', '.add-to-cart-btn', function (e) {
            e.preventDefault();
            var productId = $(this).data('product-id');
            var quantity = $(this).data('quantity');
            addToCart(productId, quantity);
        });

        // Attach click event handlers for the remove buttons
        $(document).on('click', '.cart_delete', function (e) {
            e.preventDefault();
            var cartId = $(this).data('id');
            removeFromCart(cartId);
        });

        // Attach change event handlers for the quantity input fields
        $(document).on('change', '.cart-quantity', function () {
            var cartId = $(this).data('id');
            var newQuantity = $(this).val();
            updateCartQuantity(cartId, newQuantity);
        });

        // Load cart items when the page loads
        loadCartItems();
    </script>
    
</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 08:38:05 GMT -->
</html>