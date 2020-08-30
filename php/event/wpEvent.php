<?php

function your_login_function()
{
    if (isset($_POST['event_new'])) {
        $post = [
            'post_title'   => $_POST['title'],
            'post_content' => '',
            'post_status'  => 'publish',
            'post_author'  => 1, //get_current_user_id()
            'post_type'     => 'Event',
            // 'post_category' => array( 8,39 ),
            'meta_input'   => [
                'text' => $_POST['text'],
                'date' => $_POST['date']
            ],
        ];
        wp_insert_post($post);
        // exit;
        // $_POST['event'] = null;
    }
    elseif (isset($_POST['event_update'])) {
        $post = get_post((int)$_POST['event_id']); 
     
        $post->post_content = $_POST['content'];
        $post->meta_input = [
            'text' => $_POST['text'],
            'date' => $_POST['date'],
        ];
        wp_update_post($post);
    }
    elseif (isset($_POST['event_delete'])) {
        wp_delete_post($_POST['event_id']);
    }
}

add_action('init', 'your_login_function');