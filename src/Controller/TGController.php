<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TGController extends AbstractController
{
    #[Route('/t/g', name: 'app_t_g')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'CECI EST MON CONTROLEUR',
            'path' => 'src/Controller/TGController.php',
        ]);
    }
}
