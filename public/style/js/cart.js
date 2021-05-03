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
    $.ajax({
        url: href,
        type: 'GET',
        data: {},
        success: function(){
            $(name).empty();
            //$("#show_cart").load("./mvc/views/payment/cart.php")
        }
    });
});