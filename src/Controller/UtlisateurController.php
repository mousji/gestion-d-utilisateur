<?php

namespace App\Controller;

use App\Entity\Persone;
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

    #[Route('/personnne', name: 'app_personne')]
    public function personne(): Response
    {

        $p1 = [
            'nom' => 'medousji',
            'age' => '27',
            'sexe' => true,
            'carac' => [
                'force' => '5', 'intel' => '5', 'poid' => '80 kg'

            ]
        ];


        $p2 = [
            'nom' => 'ahmed',
            'age' => '24',
            'sexe' => true,
            'carac' => [
                'force' => '5', 'intel' => '4', 'poid' => '90 kg'

            ]
        ];

        $p3 = [
            'nom' => 'ahlem',
            'age' => '24',
            'sexe' => false,
            'carac' => [
                'force' => '4', 'intel' => '9', 'poid' => '70 kg'

            ]
        ];



        $p = [
            "p1" => $p1, "p2" => $p2, "p3" => $p3
        ];

        Persone::createpersone();
        return $this->render('utlisateur/personne.html.twig', [
            "p" => $p,

            "persone" => Persone::$personne
        ]);
    }
}