<?php
/**
 * Created by PhpStorm.
 * Participant: lp
 * Date: 17/01/2018
 * Time: 14:52
 */

namespace Metinet\Domain;


class Participant
{
    private $nom;
    private $prenom;
    private $numeroTelephone;
    private $email;
    private $typeCompte;

    /**
     * Participant constructor.
     * @param $nom
     * @param $prenom
     * @param $numeroTelephone
     * @param $email
     */
    public function __construct(string $nom, string $prenom, int $numeroTelephone, string $email, string $typeCompte)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroTelephone = $numeroTelephone;
        $this->email = $email;
        $this->typeCompte = $typeCompte;

    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getNumeroTelephone()
    {
        return $this->numeroTelephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function getTypeCompte(){
        return $this->typeCompte;
    }

    public function verifEmail(){
        // Vérifie que le champ de l email n est pas vide et qu il a le format correct
    }

    public function verifNumeroTelephone(){
        // Vérifie que le numéro entré compte bien 10 chiffres commencant par 06 ou 07
    }


}