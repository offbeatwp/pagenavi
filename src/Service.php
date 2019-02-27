<?php
namespace OffbeatWP\PageNavi;

use OffbeatWP\Services\AbstractService;
use OffbeatWP\Contracts\View;

class Service extends AbstractService
{
    public function register(View $view)
    {
        $view->registerGlobal('pagenavi', new Helpers\View());
    }
}
