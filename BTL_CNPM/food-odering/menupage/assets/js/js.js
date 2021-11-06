function showCart(){
    document.getElementById('cart').style.display='block';
    document.getElementById('cart').style.zIndex='3';
    document.getElementById('btnClose').style.display='block';
}
function closeCart(){
    document.getElementById('cart').style.display='none';
    document.getElementById('cart').style.zIndex='1';
    document.getElementById('btnClose').style.display='none';
}