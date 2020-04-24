$(document).ready(function() { 

    getCountCategory();
    liveSearch();



    function getCountCategory() { 
        var category = $('.grid-c-item')
        var c1 = category.find('#c1').text()
        var c2 = category.find('#c2').text()
        var c3 = category.find('#c3').text()
        var c4 = category.find('#c4').find('p').text() 
        
        console.log(c4)
        
    }

    function liveSearch() { 
        var keyword = $('#searchkey')

        keyword.keyup(function () { 


            var xhr = new XMLHttpRequest()

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) { 
                    console.log('ok')

                }

            }

            xhr.open('GET', '')


        })
    }
    

})

