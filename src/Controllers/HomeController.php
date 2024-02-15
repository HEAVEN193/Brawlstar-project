<?php

namespace Matteomcr\BrawlstarProject\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
// use Slim\Views\PhpRenderer;


class HomeController extends BaseController
{
    public function showHomePage(ServerRequestInterface $request, ResponseInterface $response, array $args) : ResponseInterface
    {
        return $this->view->render($response, 'welcome.php');
    }
}