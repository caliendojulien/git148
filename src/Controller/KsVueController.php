<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class KsVueController extends AbstractController
{
    #[Route('/ks/vue', name: 'ks_vue_accueil')]
    public function accueil(): JsonResponse
    {
        return $this->json([
            'message' => 'Voici mon controller !',
            'path' => 'src/Controller/KsVueController.php',
        ]);
    }
}
