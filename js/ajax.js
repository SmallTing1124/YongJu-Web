$.ajax({
    url: './footer.html',
    success: function (data) {
        $('div.footer').html(data);
    }
});
$.ajax({
    url: './navbar.html',
    success: function (data) {
        $('div.navbar').html(data);
    }
});