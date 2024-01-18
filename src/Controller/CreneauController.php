<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreneauController extends AbstractController
{
    #[Route('/creneau', name: 'app_creneau')]
    public function index(): Response
    {
        return $this->render('creneau/index.html.twig', [
            'créneau' => 'CreneauController',
        ]);
    }

    #[Route('/validate', name: 'app_validate')]
    public function validate(): Response
    {
        return $this->render('creneau/validate.html.twig', [
            'validate' => 'CreneauController',
        ]);
    }
}
