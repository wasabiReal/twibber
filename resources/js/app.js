import './bootstrap';

$('#alerta').on("click", function () {
    alert("Alerta TEST!");
});

tinymce.init({
    selector: "#textarea-spread",
    plugins: "emoticons",
    toolbar: "emoticons",
    toolbar_location: "bottom",
    statusbar: false,
});
