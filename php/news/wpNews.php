<?php

function our_login_function()
{
    if (isset($_POST['news_new'])) {
        $post = [
            'post_title'   => $_POST['title'],
            'post_content' => '',
            'post_status'  => 'publish',
            'post_author'  => 1, //get_current_user_id()
            'post_type'     => 'News',
            // 'post_category' => array( 8,39 ),
            'meta_input'   => [
                'image' => $_POST['image'],
                'date' => $_POST['date'],
                'record' => $_POST['record']
            ],
        ];
        wp_insert_post($post);
        // exit;
        // $_POST['event'] = null;
    }
    elseif (isset($_POST['news_update'])) {
        $post = get_post((int)$_POST['news_id']); 
     
        $post->post_content = $_POST['content'];
        $post->meta_input = [
            'image' => $_POST['image'],
            'date' => $_POST['date'],
            'record' => $_POST['record']
        ];
        wp_update_post($post);
    }
    elseif (isset($_POST['news_delete'])) {
        wp_delete_post($_POST['news_id']);
    }
}

add_action('init', 'our_login_function');