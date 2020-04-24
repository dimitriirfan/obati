/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init SVG
5. InitQty
6. clear cart


******************************/

$(document).ready(function () {
	"use strict";


	initQty();
	initClearCart();
	initCountTotal();
	initDeleteItem();
	initCheckout();
	initCheckSuccess();

	function initCountTotal() {
		if ($('.product_quantity').length) {
			var qtys = $('.cart_item');
			var cart_total = $('.cart_extra_total_value')

			var total = 0

			qtys.each(function () {
				var qty = $(this);
				var total_each = qty.find('.product_total').text()

				total = total + parseFloat(total_each.replace(/Total:|Rp./gi, ''))



			})
			cart_total.text('Rp.' + total)

		} else {
			var cart_total = $('.cart_extra_total_value')
			cart_total.text('Rp.0')

		}

	}

	function initQty() {


		if ($('.product_quantity').length) {
			var qtys = $('.cart_item');

			qtys.each(function () {
				var qty = $(this);
				var sub = qty.find('.qty_sub');
				var price = qty.find('.product_price').text()
				var total = qty.find('.product_total')
				var add = qty.find('.qty_add');
				var num = qty.find('.product_num');



				var original;
				var newValue;

				price = price.replace(/Price:|Price: Rp.|Rp./gi, '')

				sub.on('click', function () {
					original = parseFloat(qty.find('.product_num').text());
					if (original > 0) {
						newValue = original - 1;
					}
					total.text('Rp.' + parseFloat(price * newValue))
					num.text(newValue);
					initCountTotal();


				});

				add.on('click', function () {
					original = parseFloat(qty.find('.product_num').text());
					newValue = original + 1;
					total.text('Rp.' + parseFloat(price) * newValue)
					num.text(newValue);
					initCountTotal();


				});
			});
		}


	}






	function initClearCart() {

		$('.button_clear').click(function () {
			var baseUrl = window.location.origin + '/obati/'
			var id = $(this).data('id')
			var qtys = $('.cart_item');

			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes'
			}).then((result) => {
				if (result.value) {

					$.ajax({
						url: baseUrl + 'cart/clear_cart',
						method: 'POST',
						data: {
							id: id
						},
						success: function (data) {
							qtys.remove()
							initCountTotal()

						}
					});
					

				}
			})
		})
	}

	function initDeleteItem() {

		var baseUrl = window.location.origin + '/obati/'
		var qtys = $('.cart_item');

		qtys.each(function () {
			var qty = $(this)
			var id = $(this).data('iditem')
			var delete_button = qty.find('.delete_btn');
			delete_button.click(function () {

				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes'
				}).then((result) => {
					if (result.value) {

						$.ajax({
							url: baseUrl + 'cart/delete_item',
							method: 'POST',
							data: {
								id: id
							},
							success: function (data) {

								qty.remove();
								initCountTotal();
								Swal.fire({
									position: "top-end",
									title: "Success",
									text: "Obat anda didelete dalam cart",
									timer: "1500"
								})


							}

						})


					}
				})


			})

		});


	}

	function initCheckout() {

		var checkout_input = $('#checkout_total')
		var total = $('.checkout_total').text()
		total = total.replace('Rp.', '')
		checkout_input.val(total)
	}


	function initCheckSuccess() { 
		var success = $('.success-hidden');
		if (success.length) { 
			Swal.fire({
				title: "Success",
				icon: 'success',
				text: "Transaksi anda sudah selesai, mohon ditunggu kedatangan obat",
				timer: "1500"
			})

		}
	}

	


});

function add_item(id) {
	var baseUrl = window.location.origin + '/obati/'
	var id = id

	$.ajax({
		url: baseUrl + 'cart/add_item',
		method: 'POST',
		data: {
			id: id
		},
	});

}


function sub_item(id) {
	var baseUrl = window.location.origin + '/obati/'
	var id = id

	$.ajax({
		url: baseUrl + 'cart/sub_item',
		method: 'POST',
		data: {
			id: id
		},
	});
}
