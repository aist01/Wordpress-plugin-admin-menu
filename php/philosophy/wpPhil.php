<?php

function their_login_function()
{
    if (isset($_POST['philosophy_new'])) {
        $post = [
            'post_title'   => $_POST['title'],
            'post_content' => '',
            'post_status'  => 'publish',
            'post_author'  => 1, //get_current_user_id()
            'post_type'     => 'Philosophy',
            // 'post_category' => array( 8,39 ),
            'meta_input'   => [
                'values' => $_POST['values'],
                'vision' => $_POST['vision'],
                'mission' => $_POST['mission']
            ],
        ];
        wp_insert_post($post);
        // exit;
        // $_POST['event'] = null;
    }
    elseif (isset($_POST['philosophy_update'])) {
        $post = get_post((int)$_POST['philosophy_id']); 
     
        $post->post_content = $_POST['content'];
        $post->meta_input = [
            'values' => $_POST['values'],
            'vision' => $_POST['vision'],
            'mission' => $_POST['mission']
        ];
        wp_update_post($post);
    }
    elseif (isset($_POST['philosophy_delete'])) {
        wp_delete_post($_POST['philosophy_id']);
    }
}

add_action('init', 'their_login_function');