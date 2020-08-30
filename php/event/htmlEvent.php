<?php

function render_event_function()
{
    // echo count(get_posts()) . ' count <br><br>';

    $posts = get_posts([
        'post_type' => 'Event',
        'post_status' => 'publish',
        'numberposts' => -1
        // 'order'    => 'ASC'
    ]);

    foreach ($posts as $post) {
        echo '<br><br>';
        echo 'ID: ' . $post->ID . '<br>';
        echo 'post_type: ' . $post->post_type . '<br>';
        echo 'post_title: ' . $post->post_title . '<br>';
        echo 'post_name: ' . $post->post_name . '<br>';

        echo 'post_author: ' . $post->post_author . '<br>';
        echo 'post_date: ' . $post->post_date . '<br>';
        echo 'post_modified: ' . $post->post_modified . '<br>';

        echo 'guid: <a href="' . $post->guid . '">' . $post->guid . '</a><br>';
        
        echo 'post_content: ' . $post->post_content . '<br><br>';

        $metas = get_post_meta($post->ID);
        // print_r($metas);
        // echo $metas['text'] . '<br>';
        // echo $metas['date'] . '<br>';
        foreach ($metas as $meta) {
            echo $meta[0] . '<br>';
        }

        echo '<br>
        <form method="POST" action="">
            <input type="hidden" name="event_update" value="update event">
            <input type="hidden" name="event_id" value="' . $post->ID . '">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="content" value="' . $post->post_content . '" class="">
            </div>
            <div class="form-group">
                <label>Text</label>
                <input type="text" name="text" value="' . $metas['text'][0] . '" class="">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" name="date" value="' . $metas['date'][0] . '" class="">
            </div>
            <button type="submit" class="red">EDIT</button>
        </form>
        <form method="POST" action="">
            <input type="hidden" name="event_delete" value="delete event">
            <input type="hidden" name="event_id" value="' . $post->ID . '">
            <button type="submit" class="red">DELETE</button>
        </form><br>';

        
        
        // WP_Post Object ( [ID] => 7 [post_author] => 1 [post_date] => 2020-08-21 13:46:27 [post_date_gmt] => 2020-08-21 13:46:27 [post_content] => post_content [post_title] => testing [post_excerpt] => [post_status] => publish [comment_status] => closed [ping_status] => closed [post_password] => [post_name] => testing [to_ping] => [pinged] => [post_modified] => 2020-08-21 13:46:27 [post_modified_gmt] => 2020-08-21 13:46:27 [post_content_filtered] => [post_parent] => 0 [guid] => http://localhost/wordpress/event/testing/ [menu_order] => 0 [post_type] => event [post_mime_type] => [comment_count] => 0 [filter] => raw )
    }

    echo '<br>
        <form method="POST" action="">
            <input type="hidden" name="event_new" value="new event">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="title" class="">
            </div>
            <div class="form-group">
                <label>Text</label>
                <input type="text" name="text" value="text" class="">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" name="date" value="date" class="">
            </div>
            <button type="submit" class="red">ADD</button>
        </form>
    <br>';
}

add_action( 'admin_enqueue_scripts', 'load_admin_styles' );