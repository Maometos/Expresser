<?php

namespace Application\Controllers;

use DevNet\Web\Action\IActionResult;
use DevNet\Web\Action\ActionController;

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
