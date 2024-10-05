<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class LandingController extends AbstractController
{
    #[Route('/interviews', name: 'landing_interviews')]
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
