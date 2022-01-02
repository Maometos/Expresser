<?php

namespace Application\Controllers;

use DevNet\Web\Mvc\Controller;
use DevNet\Web\Mvc\IActionResult;

class BlogController extends Controller
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
