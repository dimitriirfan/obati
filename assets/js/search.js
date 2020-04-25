$(document).ready(function () { 

    liveSearch()

    function liveSearch() { 
        var keyword = $('#searchkey')
        var baseUrl = window.location.origin + '/obati/'
        var searchres = $('.form-suggestion')


        keyword.keyup(function () { 
            if ($('.suggestion-item').length) { 
                $('.suggestion-item').remove()
            }
            $.ajax({
                url: baseUrl + 'medicine/search',
                type:'GET',
                dataType:'json',
                data:{keyword:keyword.val()},
                success:function(data) { 
                    $.each(data, function(i, value) { 
                        
                        searchres.append("<div class='suggestion-item'><img class='suggestion-img' src='"+ baseUrl + value.pic + "'><div style='position:relative'><a class='d-block stretched-link'  href='"+ baseUrl +"catalog/medicine/"+ value.id +"'></a><p class='suggestion-name'>"+ value.name +"</p></div></div>")

                    })
                }

            })

        })
    }
})