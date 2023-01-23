<?php

namespace Application\Controllers\User;

use DevNet\Web\Controller\AbstractController;
use DevNet\Web\Controller\IActionResult;

class GalleryController extends AbstractController
{
    public function index() : IActionResult
    {
        return $this->view();
    }
}
