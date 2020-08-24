<?php

function my_login_function()
{
    if (isset($_POST['idea_new'])) {
        $post = [
            'post_title'   => $_POST['title'],
            'post_content' => '',
            'post_status'  => 'publish',
            'post_author'  => 1, //get_current_user_id()
            'post_type'     => 'Idea',
            'meta_input'   => [
                'description' => $_POST['description'],
                'field' => $_POST['field']
            ],
        ];
        wp_insert_post($post);
    }
    elseif (isset($_POST['idea_update'])) {
        $post = get_post((int)$_POST['idea_id']); 
     
        $post->post_content = $_POST['content'];
        $post->meta_input = [
            'description' => $_POST['description'],
            'field' => $_POST['field'],
        ];
        wp_update_post($post);
    }
    elseif (isset($_POST['idea_delete'])) {
        wp_delete_post($_POST['idea_id']);
    }
}

add_action('init', 'my_login_function');