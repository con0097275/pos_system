$(document).ready(function () {
    var openCart= false;
    $('#btn-cart').click(function (e) { 
        e.preventDefault();
        if (!openCart) {
            $('.cart').fadeIn(1000);
            openCart=true;
            $('#btn-cart').text('Đóng giỏ hàng');
        } else{
            openCart=false;
            $('.cart').fadeOut(1000);
            $('#btn-cart').text('Mở giỏ hàng');
        }
    });
    
});