<?php
/* Change 404 page title text */
function filter_wp_title($title)
{
    if (is_404()) {
        $title = 'Seite nicht gefunden';
    }
    return $title;
}
add_filter('pre_get_document_title', 'filter_wp_title', 10);
?>