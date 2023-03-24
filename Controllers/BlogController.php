<?php

namespace Application\Controllers;

use DevNet\Web\Action\IActionResult;
use DevNet\Web\Controller\AbstractController;

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
