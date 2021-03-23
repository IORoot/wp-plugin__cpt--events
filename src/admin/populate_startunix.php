<?php

namespace andyp\cpt\event\admin;

class populate_startunix
{
    public function __construct()
    {
        add_filter( 'manage_event_posts_custom_column', [$this, 'events_posts_startunix_column'], 10 , 2 );
    }

    public function events_posts_startunix_column( $columns, $post_id ) {
        $startunix = \get_post_meta($post_id, 'startUnix');
        echo $startunix[0];
    }

}

