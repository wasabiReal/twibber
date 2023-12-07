import './bootstrap';

$('#alerta').on("click", function () {
    alert("Alerta TEST!");
});

$('#eye').on('click', function (e) {
    $(this).toggleClass('fa-eye fa-eye-slash');

    if (this.classList.contains("fa-eye-slash")) {
        $('#gossip-input').attr('type', 'password');
    } else {
        $('#gossip-input').attr('type', 'text');
    }
});

$('#tags').on('input', function () {
    var tagsValue = $(this).val().trim().split(' ');
    var tagsRegex = /^#[a-z0-9]+$/;

    tagsValue.forEach(function (el) {
        if (tagsRegex.test(el)) {
            console.log(el);
            $('#tagError').text('');
        } else {
            $('#tagError').text('Invalid tag format. Use the format "#tag1 #tag2 #tag3".');
        }
    });

});

$('#gossip-form').submit(function (event) {
    var tagsValue = $('#tags').val().trim().split(' ');
    var tagsRegex = /^#[a-z0-9]+$/;

    tagsValue.forEach(function (el) {
        if (!tagsRegex.test(el)) {
            event.preventDefault();
            $('#tagError').text('Invalid tag format. Use the format "#tag1 #tag2 #tag3".');
        }
    });
});
