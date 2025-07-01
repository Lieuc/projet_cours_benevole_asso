<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DomainesController extends AbstractController
{
    #[Route('/domaines', name: 'app_domaines')]
    public function index(): Response
    {
        return $this->render('domaines/index.html.twig', [
            'controller_name' => 'DomainesController',
        ]);
    }
}
