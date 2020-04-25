$(document).ready(function() { 

    getCountCategory();

    function getCountCategory() { 
        var category = $('.grid-c-item')
        var c1 = category.find('#c1').text()
        var c2 = category.find('#c2').text()
        var c3 = category.find('#c3').text()
        var c4 = category.find('#c4').find('p').text() 
        
        console.log(c4)
        
    }

    
    

})

