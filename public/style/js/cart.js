$('.add2').click(function(event){
    event.preventDefault();
    var href = $(this).attr('href');
    var link = window.location.href;
    console.log(href);
    $.ajax({
      url: href,
      type: 'POST',
      data: {},
      success: function(res){
        Swal.fire({
            icon: 'success',
            title: 'Them vao gio hang thanh cong',
            });
        link = link + " " + "#num_cart";
        $("#numcart").load(link);
      }
    })
  });

$('a.removeCart').click(function(event){
    event.preventDefault();
    var href = $(this).attr("href");
    var id = $(this).attr("data-id");
    var name = "#pet" + id;
    var link = window.location.href;
    $.ajax({
        url: href,
        type: 'GET',
        data: {},
        success: function(res){
            $(name).empty();
        }
    })
});

$('input.change').change(function(event){
    var id = $(this).attr("data-id");
    var cart__content = "#cart__content" + id;
    var value = $(this).val();
    var totalPet = '#totalPet' + id;
    var link = window.location.href;
    var href = link.replace('home/cart', 'pet/updatecart') +  '/' + id;
    if(value <= 0){
        value = 1;
        $(this).val(1);
    }
    $.ajax({
        url: href,
        type: 'POST',
        data: {value: value},
        success: function(res){
            $(cart__content).load(link + " " + totalPet);
            $('#total__cart').load(link + " #total_cart");
        }
    })
   
});

function thanhtoan(){
    var user = document.getElementById("check_login").innerHTML.toString().trim();
    if(user != ''){
      window.location.replace("http://localhost:8080/projectQuanTri1/pet/payment");
    }
    else{
      Swal.fire({
        icon: 'error',
        title: 'Not Login',
        }).then(function(){
          window.location.replace("http://localhost:8080/projectQuanTri1/LoginAndRegister/payment"); 
        })
    }
  }