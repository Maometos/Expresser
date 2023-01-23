<?php

namespace Application\Controllers\User;

use DevNet\Web\Controller\AbstractController;
use DevNet\Web\Controller\IActionResult;

class CommentsController extends AbstractController
{
    public function index() : IActionResult
    {
        return $this->view();
    }
}
