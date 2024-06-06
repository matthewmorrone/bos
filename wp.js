
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

$.ajax({
    type: 'POST',
    url: 'wordpress/wp.php',
    dataType: "json",
    data: {
        action : 'is_page',
        post_name : 'sunkiss'
    },
    success: function(response) {
        $.each(response, function(key, value) {
            console.log(key, value);
        });
    }
});
