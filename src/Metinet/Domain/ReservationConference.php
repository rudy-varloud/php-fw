<?php
/**
 * Created by PhpStorm.
 * Participant: lp
 * Date: 17/01/2018
 * Time: 14:36
 */

namespace Metinet\Domain;


use Metinet\Metier\Conference;

class ReservationConference
{
    private $idReservation;
    private $idConference;
    private $nbPlaceDejaReserve;
    private $idUtilisateur;

    /**
     * ReservationConference constructor.
     * @param $idReservation
     * @param $idConference
     * @param $nbPlaceDejaReserve
     * @param $prenom
     * @param $nom
     */
    public function __construct(int $idReservation, Conference $idConference, int $nbPlaceDejaReserve, Participant $idUtilisateur)
    {
        $this->idReservation = $idReservation;
        $this->idConference = $idConference;
        $this->nbPlaceDejaReserve = $nbPlaceDejaReserve;
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * @return mixed
     */
    public function getIdConference()
    {
        return $this->idConference;
    }

    /**
     * @return mixed
     */
    public function getNbPlaceDejaReserve()
    {
        return $this->nbPlaceDejaReserve;
    }

    public function getIdUtilisateur(){
        return $this->idUtilisateur;
    }

    /**
     * @return mixed
     */

    public function verifierDisponibilite(){
        // Compte le nombre de ligne que l'on a par id de Reservation
        // Comparer ce nombre a la propriete $nbPersonne, et on accepte les gens tant que le count est <= $nbPersonnes
    }

    public function checkTypeConference(){
        // Si la conférence est de type Privé on accepte pas l'inscription des type de compte Externe
    }




}