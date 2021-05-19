
$('.search').keyup(function(){
    var key = $(this).val().toLowerCase();
    console.log(key);
    var name = document.getElementsByClassName('name');
    console.log(name);
    for(let i = 0; i < name.length; i++){
        var Name = name[i].textContent.toLowerCase();
        var id = "#data-" + name[i].getAttribute("data-id");
        $(id).show();
        if(Name.indexOf(key) == -1){
            $(id).hide();
        }
    }
});
