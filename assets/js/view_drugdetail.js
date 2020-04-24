$(document).ready(function () {
	var price = parseFloat($('#price').text());


	$('.qty_sub').on("click", function () {
		var qty = $('.product_num');
		var current = parseInt(qty.text());
		var newValue;

		if (current > 0) {
			newValue = current - 1
		} 
		qty.text(newValue)
	});

	$('.qty_add').on("click", function () {
		var qty = $('.product_num');
		var current = parseInt(qty.text());
		var newValue;

		if (current > 0) {
			newValue = current + 1
		} 
		qty.text(newValue)

	});

	// ajax to cart
	$('#buy').click(function () {
		var medicineId = $(this).data('medicineid');
		var medicineQty = $('.product_num').html();
		var baseUrl = window.location.origin + '/obati/'
		var session = $(this).data('session')

		if (session == null) { 
			Swal.fire({
				title: "error",
				text: "Sign In terlebih dahulu",
				timer: "1500"
			})

		}else { 
			if (medicineQty > 0) {

				$.ajax({
	
					url: baseUrl + 'cart/add_to_cart',
					method: "POST",
					data: {
						"id": medicineId,
						"qty": medicineQty
					},
					success: function (data) {
						// todo 
						Swal.fire({
							position: "top-end",
							title: "Success",
							text: "Obat anda sudah ditambahkan dalam cart",
							timer: "1500"
						})
	
					}
	
	
				})
	
	
			}

		}
		

	})

});
