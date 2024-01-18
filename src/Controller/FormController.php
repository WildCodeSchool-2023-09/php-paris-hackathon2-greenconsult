<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function form(): Response
    {
        return $this->render('form/form.html.twig', [
            'controller_name' => 'FormController',
        ]);
    }

    #[Route('/form2', name: 'app_form2')]
    public function form2(): Response
    {
        return $this->render('form/form2.html.twig', [
            'controller_name' => 'FormController',
        ]);
    }
}
