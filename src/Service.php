<?php
namespace OffbeatWP\PageNavi;

use OffbeatWP\Services\AbstractService;

class Service extends AbstractService
{
    public function register(View $view)
    {
        $view->registerGlobal('pagenavi', new Helpers\View());
    }
}