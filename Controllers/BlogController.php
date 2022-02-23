<?php

namespace Application\Controllers;

use DevNet\Web\Controller\ActionController;
use DevNet\Web\Controller\IActionResult;

class BlogController extends ActionController
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
