<?php

/*
    Plugin Name: My First Plugin
    Description: This plugin will change your life.
*/

add_filter('the_content', 'amazingContentEdits');

function amazingContentEdits($content) {
    $content = $content . '<p>All content belongs to Fictional University</p>';
    $content = str_replace('Lorem', '*****', $content);
    return $content;
}

add_shortcode('programCount', 'programCountFunction');

function programCountFunction(){
    $count_posts = wp_count_posts('program');
    $published_posts = $count_posts->publish;
    return $published_posts;
}