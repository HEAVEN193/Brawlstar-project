<?php

namespace Matteomcr\BrawlstarProject\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Matteomcr\BrawlstarProject\Models\Brawler;
// use Slim\Views\PhpRenderer;


class CharacterController extends BaseController{

    public function showAllBrawlers(ServerRequestInterface $request, ResponseInterface $response, array $args) : ResponseInterface
    {
        $brawlersData = Brawler::fetchAll();
        
        return $this->view->render($response, 'brawler-page.php', [
            'allBrawlers' => $brawlersData->list
        ]);
    }

    public function showDetailBrawler(ServerRequestInterface $request, ResponseInterface $response, array $args) : ResponseInterface
    {
        $id = $args['id'];
        $brawlersData = Brawler::fetchById($id);
        
        return $this->view->render($response, 'test.php', [
            'brawler' => $brawlersData
        ]);
    }

    // public function showDetailBrawler(ServerRequestInterface $request, ResponseInterface $response, array $args) : ResponseInterface
    // {
    //     $brawlersData = Brawler::fetchAll();
        
    //     return $this->view->render($response, 'test.php', [
    //         'allBrawlers' => $brawlersData
    //     ]);
    // }
   
}