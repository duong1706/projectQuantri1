
$('.vali').blur(function(){
    var value = $(this).val().trim();
    var smtrong = document.getElementById('smtrong');
    if(value == ''){
        //smtrong.disabled = true;
        $("#error").text("Box can not be empty");
    }
    else{
        //smtrong.disabled = false;
        $("#error").text("");
    }
})

$('#gmail').blur(function(){
    if(!validateEmail($("#gmail").val())){
        $("#error").text("Mail khong hop le");
    }
    else{
        $("#error").text("");
    }
})

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
    
}