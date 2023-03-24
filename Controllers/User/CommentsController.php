<?php

namespace Application\Controllers\User;

use DevNet\Web\Action\Filters\Authorize;
use DevNet\Web\Action\IActionResult;
use DevNet\Web\Controller\AbstractController;

#[Authorize(roles: ['admin', 'member'])]
class CommentsController extends AbstractController
{
    public function index() : IActionResult
    {
        return $this->view();
    }
}
