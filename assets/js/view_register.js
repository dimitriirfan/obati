$(document).ready(function(){

    $('.slogan h1').delay(300).animate({'opacity':'1'},2000);

    //show password
    $("#icon-click").click(function(){
        $("#icon").toggleClass('fa-eye-slash');        

        var input = $("#input_password");
            if (input.attr("type")==="password"){
                input.attr("type","text");
            } 
            else{
                input.attr("type","password");
            }       
    })


    var flashdata = $('.flash-data').data('flashdata');
    if (flashdata) { 
        Swal.fire({
            title: "Successfuly Registered",
            text: "You will be redirected to login..",
            icon: "success",
            timer: "2000"
          }).then(function() { 
              window.location = "http://localhost/obati/Controller_login"
          });

    }

});

