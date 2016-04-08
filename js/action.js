$(document).ready(function() {
    $('#hello').click(function() {
        $.ajax({
            url: "https://itp-module-x14346081.c9users.io/booking.php"
        }).done(function(data) {
            $('#book999').html(data);
        });
    });
    $('#register').click(function() {
        $.ajax({
            url: "room.php"
        }).done(function(data) {
            $('#action').html(data);
        });
    });
});
