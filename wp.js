
$.ajax({
    type: 'POST',
    url: 'wordpress/wp.php',
    dataType: "json",
    data: {action : 'get_ajax_posts'},
    success: function(response) {
        $.each(response, function(key, value) {
            console.log(key, value);
        });
    }
});
