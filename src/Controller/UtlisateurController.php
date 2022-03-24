<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtlisateurController extends AbstractController
{
    #[Route('/', name: 'app_utlisateur')]
    public function index(): Response
    {
        return $this->render('utlisateur/index.html.twig', [
            'controller_name' => 'UtlisateurController',
        ]);
    }

    #[Route('/personne', name: 'app_personne')]
    public function personne(): Response
    {
        return $this->render('utlisateur/personne.html.twig', [
            'pesudo' => 'medousji',
            'age' => '27',
            'carac' => [
                'force' => '5', 'intel' => '5', 'poid' => '80 kg'

            ]
        ]);
    }
}