$(document).ready(function() {
    $('.card').on('click', function (e) {
        $("#content").load($(this).data("value"));
        
    });   
});