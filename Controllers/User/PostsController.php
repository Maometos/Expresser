<?php

namespace Application\Controllers\User;

use DevNet\Web\Controller\AbstractController;
use DevNet\Web\Controller\IActionResult;
use DevNet\Web\Filters\Authorize;

#[Authorize(roles: ['admin', 'member'])]
class PostsController extends AbstractController
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
