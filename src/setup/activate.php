<?php

namespace andyp\cpt\event\setup;

class activate
{

    public function __construct()
    {
        register_activation_hook( ANDYP_CPT_EVENT_PLUGIN_FILE, [$this, 'flush_post_types'] );
    }

    public function flush_post_types() {

        $event = new \andyp\cpt\event\initialise;
        $event->setup_cpt();
        $event->register_cpt();
        $event->run_cpt();

        global $wp_rewrite;
        $wp_rewrite->flush_rules();
    }

}