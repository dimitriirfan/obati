
$(document).ready(function(){

    

    //show password
    $("#edit-pic").on('click', function(e){
        e.preventDefault();
        $("#edit-pic-hidden").trigger('click');
    });     
    

    submitForm = function() { 
        $("#form1").submit();
        $("#form2").submit();

    }

       

});

