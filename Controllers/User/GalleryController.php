<?php

namespace Application\Controllers\User;

use DevNet\Web\Action\Filters\Authorize;
use DevNet\Web\Action\IActionResult;
use DevNet\Web\Action\ActionController;

#[Authorize(roles: ['admin', 'member'])]
class GalleryController extends ActionController
{
    public function index() : IActionResult
    {
        return $this->view();
    }
}
