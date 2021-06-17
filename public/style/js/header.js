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