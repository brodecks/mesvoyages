<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author rapha
 */
class AccueilController {
    #[route('/',name: 'accueil')]
    public function index(): Response{
        return new Response("hello world");
    }
}
