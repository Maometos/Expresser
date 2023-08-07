<?php

namespace Application\Controllers\User;

use DevNet\Web\Action\IActionResult;
use DevNet\Web\Action\Filters\Authorize;
use DevNet\Web\Action\ActionController;

#[Authorize(roles: ['admin', 'member'])]
class PostsController extends ActionController
{
    public function index() : IActionResult
    {
        return $this->view();
    }

    public function new() : IActionResult
    {
        return $this->view();
    }

    public function edit() : IActionResult
    {
        return $this->view();
    }
}
