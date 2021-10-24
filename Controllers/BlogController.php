<?php

namespace Application\Controllers;

use DevNet\Core\Controller\AbstractController;
use DevNet\Core\Controller\IActionResult;

class BlogController extends AbstractController
{
    public function index() : IActionResult
    {
        return $this->view();
    }

    public function post() : IActionResult
    {
        return $this->view();
    }
}
