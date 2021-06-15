
$('.search').keyup(function(){
    var key = $(this).val().toLowerCase();
    var name = document.getElementsByClassName('name');
    for(let i = 0; i < name.length; i++){
        var Name = name[i].textContent.toLowerCase().toString().trim();
        var id = "#data-" + name[i].getAttribute("data-id");
        $(id).show();
        key = key.trim();
        Name = Name.trim();
        if(Name.indexOf(key) == -1){
            $(id).hide();
        }
    }
});
