<?php

function render_philosophy_function()
{
    // echo count(get_posts()) . ' count <br><br>';

    $posts = get_posts([
        'post_type' => 'Philosophy',
        'post_status' => 'publish',
        'numberposts' => -1
        // 'order'    => 'ASC'
    ]);

    foreach ($posts as $post) {
        // echo '<br><br>';
        // echo 'ID: ' . $post->ID . '<br>';
        // echo 'post_type: ' . $post->post_type . '<br>';
        // echo 'post_title: ' . $post->post_title . '<br>';
        // echo 'post_name: ' . $post->post_name . '<br>';

        // echo 'post_author: ' . $post->post_author . '<br>';
        // echo 'post_date: ' . $post->post_date . '<br>';
        // echo 'post_modified: ' . $post->post_modified . '<br>';

        // echo 'guid: <a href="' . $post->guid . '">' . $post->guid . '</a><br>';
        
        // echo 'post_content: ' . $post->post_content . '<br><br>';

        // $metas = get_post_meta($post->ID);
       
        // foreach ($metas as $meta) {
        //     echo '<h3>' . $meta[0] . '</h3>';
        // }

        // echo '<div class="name"> By user no.' . $post->post_author . '</div>';
        // echo '<div class="title">' . $post->post_title . '</div>';

        echo '<br>
            <div class="lenteles">
            <form class="forma" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="philosophy_update" value="update philosophy">
                <input type="hidden" name="philosophy_id" value="' . $post->ID . '">
                <div class="form-group">
                    <label class="admin-label">Vertybės</label><br>
                    <input type="file" name="values" value="' . $metas['values'][0] . '" class="admin-input">
                </div>
                <div class="form-group">
                    <label class="admin-label">Vizija</label><br>
                    <input type="text" name="vision" value="' . $metas['vision'][0] . '" class="admin-input">
                </div>
                <div class="form-group">
                    <label class="admin-label">Misija</label><br>
                    <input type="text" name="mission" value="' . $metas['mission'][0] . '" class="admin-input">
                </div>
                <div class="mygtukai">
                    <button type="submit" class="admin-button">Redaguoti</button>
                    </form>
                    <form method="POST" action="">
                    <div class="mygtukai">
                            <input type="hidden" name="philosophy_delete" value="philosophy_id">
                            <input type="hidden" name="philosophy_id" value="' . $post->ID . '">
                            <button type="submit" class="admin-button">Trinti</button>
                        </div>
                    </form>
                </div>
        </div>
        <br>';

}

        // echo '<br>
        //     <form method="POST" action="">
        //         <input type="hidden" name="philosophy_new" value="new philosophy">
        //         <div class="form-group">
        //             <label>philosophy title</label>
        //             <input type="text" name="image" value="image" class="">
        //         </div>
        //         <div class="form-group">
        //             <label>philosophy description</label>
        //             <input type="text" name="date" value="date" class="">
        //         </div>
        //         <div class="form-group">
        //             <label>Field</label>
        //             <input type="text" name="text" value="text" class="">
        //         </div>
        //         <button type="submit" class="red">ADD</button>
        //     </form>
        // <br>';

        echo '<br>
            <div class="lenteles">
                <form class="forma" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="philosophy_new" value="new philosophy">
                    <div class="form-group">
                        <label class="admin-label">Vertybės</label><br>
                        <input type="file" name="values" value="values" class="admin-input">
                    </div>
                    <div class="form-group">
                        <label class="admin-label">Vizija</label><br>
                        <input type="text" name="vision" value="vision" class="admin-input">
                    </div>
                    <div class="form-group">
                        <label class="admin-label">Misija</label><br>
                        <input type="text" name="mission" value="mission" class="admin-input">
                    </div>
                    <div class="mygtukai">
                        <button type="submit" class="admin-button">Pridėti</button>
                </form>
                    </div>
            </div>
        <br>';
}

add_action('init', 'create_philosophy_post_type');

add_action( 'admin_enqueue_scripts', 'load_admin_styles' );