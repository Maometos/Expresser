<?php

namespace Application\Controllers;

use DevNet\Web\Controller\AbstractController;
use DevNet\Web\Controller\IActionResult;

class BlogController extends AbstractController
{
    public function index(): IActionResult
    {
        return $this->view();
    }

    public function post(): IActionResult
    {
        return $this->view();
    }
}
