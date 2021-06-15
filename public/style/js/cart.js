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
    var link = window.location.href;ss
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
    console.log(href);
    if(value <= 0){
        value = 1;
    }
    console.log(link);
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
    console.log("ok");
    var user = document.getElementById("check_login").innerHTML.toString().trim();
    if(user != ''){
      console.log("ojoj");
      window.location.replace("http://localhost:8080/projectQuanTri1/pet/payment");
    }
    else{
      console.log("koko");
      Swal.fire({
        icon: 'error',
        title: 'Not Login',
        }).then(function(){
          window.location.replace("http://localhost:8080/projectQuanTri1/LoginAndRegister/payment"); 
        })
    }
  }