const menuIcon = document.querySelector('.cart__icon');
const cart_payment = document.querySelector('.cart__payment');

menuIcon.addEventListener('click',function(){
        cart_payment.classList.add("cart__showed");
        cart_payment.classList.remove("cart__hidden");
        menuIcon.style.display="none";
})
const cart__burger = document.querySelector('.cart__burger');

cart__burger.addEventListener('click',function(){
cart_payment.classList.add("cart__hidden");
cart_payment.classList.remove("cart__showed");

        menuIcon.style.display="block";
})

$('a.add1').click(function(event){
    event.preventDefault();
    var href = $(this).attr('href');
    console.log(href);
    $.ajax({
        url: href,
        type: 'POST',
        data: {},
        success: function(res){
            swal("Them thanh cong", "ez", "success");
            $("#show_cart").load("./mvc/views/payment/cart.php");
        }
    });
});


$('a.removeCart').click(function(event){
    event.preventDefault();
    var href = $(this).attr("href");
    var id = $(this).attr("data-id");
    var name = "#pet" + id;
    var lct = $(this).attr("lct");
    var link = '';
    if(lct === 0){
        link = 'http://localhost/projectQuanTri1 ';
    }
    else if(lct === 1){
        link = 'http://localhost/projectQuanTri1/pet/detail/' + id + ' ';
    }
    
    $.ajax({
        url: href,
        type: 'GET',
        data: {},
        success: function(){
            $(name).empty();
            $('#show_cart').load(link + '#icon__cart')
            //$("#show_cart").load("./mvc/views/payment/cart.php")
        }
    });
});

$('input.change').blur(function(event){
    var id = $(this).attr("data-id");
    var cart__content = "#cart__content" + id;
    var value = $(this).val();
    var totalPet = '#totalPet' + id;
    var href = "http://localhost/projectQuanTri1/pet/updatecart/" + id;
    
   
    var link = './mvc/views/payment/cart.php ';
    if(value <= 0){
        value = 1;
    }
    
    $.ajax({
        url: href,
        type: "POST",
        data: {value:value},
        success:function(res){
            $(cart__content).load(link + totalPet);
            $('#total__cart').load(link + "#total_cart");
        }
    });
});