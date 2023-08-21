<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_index')]
    public function index(
        HttpClientInterface $client
    ): \Symfony\Component\HttpFoundation\Response
    {

        $response = $client->request(
            'GET',
            'https://api.chucknorris.io/jokes/random'
        );

        $blagues = $response->toArray();

        return $this->render(
            'main/index.html.twig',
            compact('blagues')
        );
    }
}
