<?php

function render_news_function()
{
    // echo count(get_posts()) . ' count <br><br>';

    $posts = get_posts([
        'post_type' => 'News',
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


        // 1 img news_picture
        echo '<br>
            <div class="lenteles">
            <form class="forma" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="news_update" value="update news">
                <input type="hidden" name="news_id" value="' . $post->ID . '">
                <div class="form-group">
                    <label class="admin-label">Paveikslėlis</label><br>
                    <input type="file" name="image" value="' . $metas['image'][0] . '" class="admin-input">
                </div>
                <div class="form-group">
                    <label class="admin-label">Data</label><br>
                    <input type="text" name="date" value="' . $metas['date'][0] . '" class="admin-input">
                </div>
                <div class="form-group">
                    <label class="admin-label">Įrašas</label><br>
                    <input type="text" name="record" value="' . $metas['record'][0] . '" class="admin-input">
                </div>
                <div class="mygtukai">
                    <button type="submit" class="admin-button">Redaguoti</button>
                    </form>
                    <form method="POST" action="">
                    <div class="mygtukai">
                            <input type="hidden" name="news_delete" value="news_id">
                            <input type="hidden" name="news_id" value="' . $post->ID . '">
                            <button type="submit" class="admin-button">Trinti</button>
                        </div>
                    </form>
                </div>
        </div>
        <br>';

}

        // echo '<br>
        //     <form method="POST" action="">
        //         <input type="hidden" name="news_new" value="new news">
        //         <div class="form-group">
        //             <label>news title</label>
        //             <input type="text" name="image" value="image" class="">
        //         </div>
        //         <div class="form-group">
        //             <label>news description</label>
        //             <input type="text" name="date" value="date" class="">
        //         </div>
        //         <div class="form-group">
        //             <label>Field</label>
        //             <input type="text" name="text" value="text" class="">
        //         </div>
        //         <button type="submit" class="red">ADD</button>
        //     </form>
        // <br>';

        // 1 img news_picture
        echo '<br>
            <div class="lenteles">
                <form class="forma" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="news_new" value="new news">
                    <div class="form-group">
                        <label class="admin-label">Paveikslėlis</label><br>
                        <input type="file" name="image" value="image" class="admin-input">
                    </div>
                    <div class="form-group">
                        <label class="admin-label">Data</label><br>
                        <input type="text" name="date" value="date" class="admin-input">
                    </div>
                    <div class="form-group">
                        <label class="admin-label">Įrašas</label><br>
                        <input type="text" name="record" value="record" class="admin-input">
                    </div>
                    <div class="mygtukai">
                        <button type="submit" class="admin-button">Pridėti</button>
                </form>
                    </div>
            </div>
        <br>';
}

add_action('init', 'create_news_post_type');

add_action( 'admin_enqueue_scripts', 'load_admin_styles' );