<?php


namespace App\Entity;

class Persone
{


    public $nom;
    public $age;
    public $sexe;
    public $carac = [];
    public static $personne = [];

    public function __construct($nom, $age, $sexe, $carac)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personne[] = $this;
    }
    public static function createpersone()
    {
        $p1 = new  Persone('karim', 27, true, [
            'force' => '5', 'intel' => '5', 'poid' => '70 kg'

        ]);

        $p2 = new  Persone('walid', 30, true, [
            'force' => '9', 'intel' => '8', 'poid' => '90 kg'

        ]);

        $p3 = new  Persone('salma', 27, false, [
            'force' => '5', 'intel' => '10', 'poid' => '60 kg'

        ]);
    }

    public static function getdetailsParNom($nom)

    {


        foreach (self::$personne as $details) {

            if (strtolower($details->nom) === $nom)
                return $details;
        }
    }


    // $p1 = [
    //     'nom' => 'medousji',
    //     'age' => '27',
    //     'sexe' => true,
    //     'carac' => [
    //         'force' => '5', 'intel' => '5', 'poid' => '80 kg'

    //     ]
    // ];





}