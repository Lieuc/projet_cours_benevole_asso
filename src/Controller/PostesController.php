<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostesController extends AbstractController
{
    #[Route('/postes', name: 'app_postes')]
    public function index(): Response
    {
        return $this->render('postes/index.html.twig', [
            'controller_name' => 'PostesController',
        ]);
    }
}
