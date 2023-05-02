import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;


$('body').on('click', '.hamburger', function() {
    $(".sidebar").addClass("aside");
});
$('body').on('click', '.close', function() {
    $(".sidebar").removeClass("aside");
});

$('body').on('click', '.model-btn', function() {
    $(".model").fadeIn("active");
});
$('body').on('click', '.close', function() {
    $(".model").fadeOut("active");
});


