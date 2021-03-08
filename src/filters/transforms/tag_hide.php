<?php

namespace andyp\cpt\event\filters\transforms;

/**
 * Hide the tag:beginner tags.
 */
class tag_hide {

    public function __construct()
    {
        add_filter('cpt_event_transforms', [$this, 'callback'], 40, 1 );
    }

    public function callback($text)
    {
        return preg_replace('/\" >tag/i',' hidden">tag',$text);
    }

}
