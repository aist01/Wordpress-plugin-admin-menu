<?php

function render_idea_function() {
    
    $posts = get_posts([
        'post_type' => 'Idea',
        'post_status' => 'publish',
        'numberposts' => -1
    ]);

    foreach ($posts as $post) {

        $metas = get_post_meta($post->ID);
       
        foreach ($metas as $meta) {
            echo '<h2>' . $meta[0] . '</h2>';
        }

        echo '<div class="name"> By user no.' . $post->post_author . '</div>';
        echo '<div class="title">' . $post->post_title . '</div>';

        echo '<br>
        <form method="POST" action="">
            <input type="hidden" name="idea_update" value="update idea">
            <input type="hidden" name="idea_id" value="' . $post->ID . '">
            <div class="form-group">
                <label>Idea title</label>
                <input type="text" name="content" value="' . $post->post_content . '" class="">
            </div>
            <div class="form-group">
                <label>Idea description</label>
                <input type="text" name="description" value="' . $metas['description'][0] . '" class="">
            </div>
            <div class="form-group">
                <label>Field</label>
                <input type="text" name="field" value="' . $metas['field'][0] . '" class="">
            </div>
            <button type="submit" class="red">EDIT</button>
        </form>
        <form method="POST" action="">
            <input type="hidden" name="idea_delete" value="delete idea">
            <input type="hidden" name="idea_id" value="' . $post->ID . '">
            <button type="submit" class="red">DELETE</button>
        </form><br>';

}

    echo '<br>
        <form method="POST" action="">
            <input type="hidden" name="idea_new" value="new idea">
            <div class="form-group">
                <label>Idea title</label>
                <input type="text" name="title" value="title" class="">
            </div>
            <div class="form-group">
                <label>Idea description</label>
                <input type="text" name="text" value="description" class="">
            </div>
            <div class="form-group">
                <label>Field</label>
                <input type="text" name="field" value="field" class="">
            </div>
            <button type="submit" class="red">ADD</button>
        </form>
    <br>';
}

add_action('init', 'create_idea_post_type');