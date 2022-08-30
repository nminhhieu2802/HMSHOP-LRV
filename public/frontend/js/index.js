$(document).ready(function() {

    load_cart();

    load_wishlist();

    $('.addToCartBtn').click(function(e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function(response) {
                swal(response.status);
                load_cart();
            }
        });
    });

    $('.addToWishlist').click(function(e){
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        $.ajax({
            type : "POST",
            url : "/add-to-wishlist",
            data : {
                'product_id' : product_id,
            },
            success : function(response){
                swal(response.status);
                load_wishlist();
            }
        });
    });

    function load_cart()
    {
        $.ajax({
            method : "GET",
            url : "/load-cart-data",
            success : function(response){
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
            }
        });
    }

    function load_wishlist()
    {
        $.ajax({
            method : "GET",
            url : "/load-wishlist-data",
            success : function(response){
                $('.wishlist-count').html('');
                $('.wishlist-count').html(response.count);
            }
        });
    }

    $('.increment-btn').click(function(e){
        e.preventDefault();

        var inc_value =$(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value,10);
        value = isNaN(value) ? 0:value;
        if(value <10)
        {
            value++;

            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });
    
    $('.decrement-btn').click(function(e){
        e.preventDefault();
         
      
        var dec_value =$(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value,10);
        value = isNaN(value ) ? 0: value;
        if(value > 1)
        {
            value--;
         
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    // $('.delete-cart-item').click(function(e){
    $(document).on('click','.delete-cart-item',function(e){
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
            type:"POST",
            url:"delete-cart-item",
            data:{
                'prod_id':prod_id,
            },
            success: function(response){
                load_cart();
                $('.cartitems').load(location.href + " .cartitems");
                swal("Success",response.status);
            }
        });
    });
    $(document).on('click','.delete-wishlist-item',function(e){
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
            type:"POST",
            url:"delete-wishlist-item",
            data:{
                'prod_id':prod_id,
            },
            success: function(response){
                load_wishlist();
                $('.wishlist').load(location.href + " .wishlist");
                swal("Success",response.status);
            }
        });
    });

    $('.changeQuantity').click(function(e){
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty = $(this).closest('.product_data').find('.qty-input').val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

        data = {
            'prod_id' : prod_id,
            'prod_qty' : qty,
        }
        $.ajax({
            method : "POST",
            url : "update-cart",
            data : data,
            success : function(response){
                window.location.reload();
            }
        });
    });
});