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


});