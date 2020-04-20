$(document).ready(function() {
    $("#radio_1").click(function() {
      $("#checkout_form_bank").show();
        $("#checkout_form").hide();
          $("#checkout_form_cc").hide();
    });
    $("#radio_2").click(function() {
        $("#checkout_form").show();
            $("#checkout_form_bank").hide();
              $("#checkout_form_cc").hide();
    });
    $("#radio_3").click(function() {
        $("#checkout_form_cc").show();
            $("#checkout_form").hide();
              $("#checkout_form_bank").hide();
      
    });
  });

  // $(function() {
	// 	$(".like-btn").on("click", function() {
	// 	$(this).toggleClass("is-active");
	// 	});
	// });

  // $("a[data-toggle]").on("click", function(e) {
  //   e.preventDefault();  // prevent navigating
  //   var selector = $(this).data("toggle");  // get corresponding element
  //   $("form").hide();
  //   $(selector).show();
  // });