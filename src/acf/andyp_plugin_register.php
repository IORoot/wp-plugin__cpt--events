<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Labs - CPT: Event ',
        'icon'      => 'run-fast',
        'color'     => '#38EF7D',
        'path'      => __FILE__,
    ]);
} );