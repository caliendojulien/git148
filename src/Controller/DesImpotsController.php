<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DesImpotsController extends AbstractController
{
    #[Route('/des/impots', name: 'app_des_impots')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller des impots!',
            'path' => 'src/Controller/DesImpotsController.php',
        ]);
    }
}
