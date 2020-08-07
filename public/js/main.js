$(function () {
    $('#cat_id').on('change', function () {
        var cat_id = $(this).val();
        $.get(route + '/orders/getProducts', {cat_id:cat_id}, function(data){
                $('#product_id').html(data);
        });

        // if (cat_id) {
        //     $.ajax({
        //         type: 'GET',
        //         async: true,
        //         url: route + '/orders/getProducts',
        //         data: 'cat_id=' + cat_id,
        //         success: function (data) {
        //             $('#product_id').html(data);
        //         }
        //     });
        // }
    });
});