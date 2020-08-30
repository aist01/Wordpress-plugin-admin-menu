<?php

add_action( 'admin_menu', function(){
    add_menu_page('event title', 'Event menu', 'manage_options', 'event_slug', 'render_event_function');
    // add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null );
    add_menu_page('idea title', 'Ideas page', 'manage_options', 'ideas', 'render_idea_function');
    add_menu_page('news title', 'News page', 'manage_options', 'news', 'render_news_function');
    add_menu_page('philosophy title', 'Philosophy page', 'manage_options', 'philosophy', 'render_philosophy_function');
    // add_submenu_page('bebras', 'Edit', null, 'manage_options', 'bebras3', 'bebro_funkcija3');
});