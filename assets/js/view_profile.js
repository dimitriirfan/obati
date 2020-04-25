$(document).ready(function () {


    initDelete(); 

    //show password
    $("#edit-pic").on('click', function (e) {
        e.preventDefault();
        $("#edit-pic-hidden").trigger('click');
    });


    submitForm = function () {
        $("#form1").submit();
        $("#form2").submit();

    }

    function initDelete() {
        $('.btn-delete').click(function () {
            var id = $(this).data('id')
            var baseUrl = window.location.origin + '/obati/'

            Swal.fire({
                title: 'Anda yakin?',
                text: "Anda tidak bisa mengulang perbuatan anda",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, delete akun'
            }).then((result) => {
                if (result.value) {

                    $.ajax({
                        url: baseUrl + 'profile/delete_profile',
                        method: 'post',
                        data: {id, id},
                        success:function(data) {
                            Swal.fire(
                                'Deleted!',
                                'Akun anda telah terdelete.',
                                'success',
                                '2000'
        
                            )
                            window.location.replace(window.location.origin + '/obati'); 
                            
                        }
                    })
                    

                }
            })

        })
    }



});

function deleteProfile() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })

}