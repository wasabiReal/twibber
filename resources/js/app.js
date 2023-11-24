import './bootstrap';

$('#alerta').on("click", function () {
    alert("Alerta TEST!");
});

$('#eye').on('click', function (e){
    $(this).toggleClass('fa-eye fa-eye-slash');

    if(this.classList.contains("fa-eye-slash")){
        $('#gossip-input').attr('type', 'password');
    }else{
        $('#gossip-input').attr('type', 'text');
    }
});

$(document).ready(function (e){


});
