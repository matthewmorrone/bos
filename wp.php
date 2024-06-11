<?php
include ("wordpress/wp-config.php");
$_ = $_POST ?: $_GET; // extract($_);

if (isset($_["action"])) {
    $args = array('posts_per_page' => -1);

    switch ($_["action"]) {
        case "events":    $args['category_name'] = 'events';    break;
        case "galleries": $args['category_name'] = 'galleries'; break;
        case "djs":       $args['category_name'] = 'djs';       break;
        case "models":    $args['category_name'] = 'models';    break;
    }

    if (!isset($args['category_name'])) exit(0);

    if (isset($_["id"])) {
        $posts = get_post($_["id"]);
        $posts->fields = get_fields($posts->ID);
    }
    else if (isset($_["name"])) {
        $posts = get_page_by_path($_["name"], OBJECT, 'post');
        $posts->image = get_the_post_thumbnail_url($posts->ID);
        $posts->fields = get_fields($posts->ID);
        if ($posts->fields["dj"]) {
            $posts->fields["dj_id"] = $posts->fields["dj"]->ID;
            $posts->fields["dj_image"] = get_the_post_thumbnail_url($posts->fields["dj"]->ID);
        }
    }
    else {
        $query = new WP_Query($args);
        $posts = $query->get_posts();
    }
    if ($_POST) { echo json_encode($posts); }
    else if ($_GET) { echo "<pre>"; print_r($posts); echo "</pre>"; }
}


