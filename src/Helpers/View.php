<?php
namespace OffbeatWP\PageNavi\Helpers;

use OffbeatWP\Content\Post\PostsCollection;

class View
{
    public function show(PostsCollection $postCollection)
    {
        if (!function_exists('wp_pagenavi')) {
            return 'Please activate wp_pagenavi plugin.';
        }
        return wp_pagenavi(['query' => $postCollection->getQuery(), 'echo' => false]);
    }
}