

<?php 
$cart="";
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
 ?>

<script type="text/javascript">
function callbackPage() {
    //window.location = "menu link";
    //move to the menu
    window.location.href='../food-ordering';

}

let products = [    
    <?php foreach($cart as $i): ?>        
            {id: <?php echo $i['MaMonAn'] ?>,
            name: <?php echo "'" . $i['TenMonAn'] . "'"?>,
            price: <?php echo $i['giaTien']?>,
            quantity: <?php echo $i['num'] ?>},
    <?php endforeach; ?>

];

productsEle = document.getElementById('choose-item');
renderUI(products);

function renderUI(arr) {

    productsEle.innerHTML = '';

    if (arr.length == 0) {
        productsEle.insertAdjacentHTML(
            'afterbegin',
            '<img src="img/icon_cart_blank.svg" alt="" style="width:100%;">'
        );
        updateTotal(products);
        return;
    }
    for (let i = 0; i < arr.length; i++) {
        const p = arr[i];

        productsEle.innerHTML += `
            <div class="cart-item">
            <hr>
            <div class="item d-flex align-items-center justify-content-between">
                <div class="product-name">
                    ${p.name}
                </div>
                <img src="img/cancel.png" alt="" style="width:20px;" class="btn" onclick="removeItem(${p.id})">
            </div>
            <div class="price-item d-flex align-items-center justify-content-between">
                <div class="quantity-box d-flex align-items-center justify-content-between">
                    <div class="btn minus-item" onclick="minusItem(${p.id})">
                        <img src="img/minus.png" alt="" style="width:15px;height:15px;">
                    </div>
                    <div class="quantity-box">${p.quantity}</div>
                    <div class="btn" onclick="plusItem(${p.id})">
                        <img src="img/plus.png" alt="" style="width:15px;height:15px;">
                    </div>
                </div>
                <div id="price">${displayNumber(p.price*p.quantity)}</div>
            </div>
            
        </div>
            `;
    }
    updateTotal(products);
}

function removeItem(id) {
    if (products.length == 1) { products = []; return; }
    for (let i = 0; i < products.length; i++) {
        if (products[i].id == id) {
            products.splice(i, 1);
        }
    }
    renderUI(products);
}

function minusItem(id) {
    for (let i = 0; i < products.length; i++) {
        if (products[i].id == id) {
            products[i].quantity = products[i].quantity > 1 ? products[i].quantity - 1 : 1;
        }
    }
    renderUI(products);
}

function plusItem(id) {
    for (let i = 0; i < products.length; i++) {
        if (products[i].id == id) {
            products[i].quantity++;
        }
    }
    renderUI(products);
}

function updateTotal(arr) {
    let total_quantity = 0;
    let sub_total_price = 0;


    if (arr) {
        for (let i = 0; i < arr.length; i++) {
            const p = arr[i];
            total_quantity += p.quantity;
            sub_total_price += p.price * p.quantity;
        };
        let tax = parseInt(sub_total_price* 0.1);
        document.getElementById('total-quantity').innerHTML = total_quantity;
        document.getElementById('subtotal-price').innerHTML = displayNumber(sub_total_price);
        document.getElementById('tax').innerHTML = displayNumber(tax);
        document.getElementById('ship-price').innerHTML = "20.000";
        document.getElementById('total-bill').innerHTML = displayNumber(sub_total_price + tax + 20000);

        let phantramgiamgia="<?php if(isset($_SESSION['phantramgiamgia'])) {
            echo intval($_SESSION['phantramgiamgia']);
        }else {echo '';}?>";
        phantramgiamgia=Number(phantramgiamgia);
        
        if (phantramgiamgia) {
            document.getElementById('gg').innerHTML='Giảm giá';
            document.getElementById('phantramgiamgia').innerHTML=phantramgiamgia +' %';
            document.getElementById('gcl').innerHTML='Còn lại';
            document.getElementById('giaconlai').innerHTML=displayNumber(parseInt((sub_total_price + tax + 20000)*(100-phantramgiamgia)/100))+" đ";
        } 
        
    } else {
        document.getElementById('total-quantity').innerHTML = '0';
        document.getElementById('subtotal-price').innerHTML = '0';
        document.getElementById('ship-price').innerHTML = "0";
        document.getElementById('tax').innerHTML = '0';
        document.getElementById('total-bill').innerHTML = '0';
         document.getElementById('gg').innerHTML="";
         document.getElementById('phantramgiamgia').innerHTML="";
         document.getElementById('gcl').innerHTML="";
         document.getElementById('giaconlai').innerHTML="";

    }

}

function displayNumber(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function hiden(number) {
    if (number == '1') {
        document.getElementById('btn-payment').style.visibility = 'hidden';
        document.getElementById('tienmat').style.visibility = 'visible';
    } else {
        document.getElementById('btn-payment').style.visibility = 'visible';
        document.getElementById('tienmat').style.visibility = 'hidden';
    }
}

function test1() { //thanh toan thanh cong    
    //window.location = "menu link";
    //move to the menu
    var method_t = 'online';
    if (document.getElementById('btn-payment').style.visibility == 'visible') {
        method_t = 'tienmat';
    }
    $.ajax({
        url: "php/log.php",
        type: "post",
        data: {
            username: 'chien',
            method: method_t,
            mount: document.getElementById('total-bill').innerHTML
        },
        success: function(response) {
            callbackPage();
            alert("Thanh toán thành công");
            // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
    $.post('../food-ordering/menupage/ajax.php',{
            'action':'deletecart'
        })
    
}

function displayModal() {
    $('#myModal').modal('show');
}



</script>