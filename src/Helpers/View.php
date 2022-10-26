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

    public function fromCustomResultSet(array $paginationOptions): string
    {
        if (!function_exists('wp_pagenavi')) {
            return 'Please activate wp_pagenavi plugin.';
        }

        $currentPage = $paginationOptions['current_page'] ?? 1;
        $postsPerPage = $paginationOptions['posts_per_page'] ?? 1;
        $maxNumPages = $paginationOptions['max_num_pages'] ?? 1;

        $options = [];
        if (!empty($paginationOptions['navi_num_pages'])) {
            $options['num_pages'] = $paginationOptions['navi_num_pages'];
        }
        if (!empty($paginationOptions['navi_num_larger_page_numbers'])) {
            $options['num_larger_page_numbers'] = $paginationOptions['navi_num_larger_page_numbers'];
        }
        if (!empty($paginationOptions['navi_larger_page_numbers_multiple'])) {
            $options['larger_page_numbers_multiple'] = $paginationOptions['navi_larger_page_numbers_multiple'];
        }

        // instantiate a new WP_Query to give pagenavi the means to work
        $query = new \WP_Query([
            'paged' => $currentPage,
            'posts_per_page' => $postsPerPage
        ]);
        $query->max_num_pages = $maxNumPages;
        $query->is_paged = true;

        return wp_pagenavi([
            'type' => 'query',
            'query' => $query,
            'echo' => false,
            'options' => $options
        ]);
    }
}