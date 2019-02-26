<?php
namespace OffbeatWP\PageNavi\Helpers;

use OffbeatWP\Content\Post\PostsCollection;

class View
{
    public function show(PostsCollection $postCollection)
    {
        return wp_pagenavi(['query' => $postCollection->getQuery(), 'echo' => false]);
    }
}