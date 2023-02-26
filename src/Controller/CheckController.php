<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class CheckController extends AbstractController
{
    #[Route('/api/check', name: 'app_check', methods: 'GET')]
    public function index(): JsonResponse
    {
        return $this->json(
            [
                'currDate' => new \DateTime(),
            ]
        );
    }
}
