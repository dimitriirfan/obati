

$(document).ready(function(){

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

    //slogan
    $('.slogan h1').delay(300).animate({'opacity':'1'},2000);


    //password input focus
    $('#input_password').focus(function() {
        $('#label_password').css('color','#4492ED');
    }).focusout(function(){
        $('#label_password').css('color','#646464');
    })

    // email input focus
    $('#input_email').focus(function() {
        $('#label_email').css('color','#4492ED');
    }).focusout(function(){
        $('#label_email').css('color','#646464');
    })
});





