<?php

namespace andyp\cpt\event\admin;

class admin_columns
{
    public function __construct()
    {
        add_filter( 'manage_event_posts_columns', [$this, 'events_posts_columns'] );
        add_filter( 'manage_edit-event_sortable_columns', [$this, 'events_sortable_column'] );
    }

    public function events_posts_columns( $columns ) {
        $columns['startUnix'] = __( 'startUnix' );
        return $columns;
    }

    public function events_sortable_column( $columns ) {
        $columns['startUnix'] = __( 'startUnix' );
        return $columns;
    }

}

