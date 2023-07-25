// $(function () {
//     getCartItems();

//     $(document).on('click', '.cart-delete', function (e) {
//         e.preventDefault();
//         var id = $(this).data('id');
//         deleteCartItem(id);
//     });

//     $(document).on('click', '.minus', function (e) {
//         e.preventDefault();
//         var id = $(this).data('id');
//         var qty = $('#qty_' + id).val();
//         if (qty > 1) {
//             qty--;
//         }
//         $('#qty_' + id).val(qty);
//         updateCartItem(id, qty);
//     });

//     $(document).on('click', '.add', function (e) {
//         e.preventDefault();
//         var id = $(this).data('id');
//         var qty = $('#qty_' + id).val();
//         qty++;
//         $('#qty_' + id).val(qty);
//         updateCartItem(id, qty);
//     });

//     function updateCartItem(id, qty) {
//         $.ajax({
//             type: 'POST',
//             url: 'cart-update.php',
//             data: {
//                 id: id,
//                 qty: qty,
//             },
//             dataType: 'json',
//             success: function (response) {
//                 if (!response.error) {
//                     getCartItems();
//                     getTotal();
//                 }
//             }
//         });
//     }

//     function getCartItems() {
//         $.ajax({
//             type: 'POST',
//             url: 'cart_details.php',
//             dataType: 'html',
//             success: function (response) {
//                 $('#cart-items').html(response);
//                 getTotal();
//             }
//         });
//     }

//     function getTotal() {
//         $.ajax({
//             type: 'POST',
//             url: 'cart-total.php',
//             dataType: 'json',
//             success: function (response) {
//                 $('#total-amount').html('$' + response.toFixed(2));
//             }
//         });
//     }

//     function deleteCartItem(id) {
//         $.ajax({
//             type: 'POST',
//             url: 'cart-delete.php',
//             data: { id: id },
//             dataType: 'json',
//             success: function (response) {
//                 if (!response.error) {
//                     getCartItems();
//                     getTotal();
//                 }
//             }
//         });
//     }
// });


var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'cart_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		qty++;
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'cart_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}

// <!-- Paypal Express -->
// <script>
// paypal.Button.render({
//     env: 'sandbox', // change for production if app is live,

// 	client: {
//         sandbox:    'ASb1ZbVxG5ZFzCWLdYLi_d1-k5rmSjvBZhxP2etCxBKXaJHxPba13JJD_D3dTNriRbAv3Kp_72cgDvaZ',
//         //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
//     },

//     commit: true, // Show a 'Pay Now' button

//     style: {
//     	color: 'gold',
//     	size: 'small'
//     },

//     payment: function(data, actions) {
//         return actions.payment.create({
//             payment: {
//                 transactions: [
//                     {
//                     	//total purchase
//                         amount: { 
//                         	total: total, 
//                         	currency: 'USD' 
//                         }
//                     }
//                 ]
//             }
//         });
//     },

//     onAuthorize: function(data, actions) {
//         return actions.payment.execute().then(function(payment) {
// 			window.location = 'sales.php?pay='+payment.id;
//         });
//     },

// }, '#paypal-button');

