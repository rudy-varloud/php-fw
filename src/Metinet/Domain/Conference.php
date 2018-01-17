<?php
/**
 * Created by PhpStorm.
 * Participant: lp
 * Date: 17/01/2018
 * Time: 11:20
 */

namespace Metinet\Domain;

use Metinet\Domain\DateDebut;
use Metinet\Domain\Salle;
use Metinet\Domain\UnableToCreateMeeting;

class Conference
{
    private $id;
    private $nomReunion;
    private $description;
    private $objectif;
    private $typeEvenement;
    private $salle;
    private $ville;
    private $dateDebut;
    private $dateFin;
    private $idOrganisateur;
    private $nbPersonne;
    private $prix;

    /**
     * ReunionEleve constructor.
     * @param $id
     * @param $nomReunion
     * @param $description
     * @param $objectif
     * @param $typeEvenement
     * @param $idSalle
     * @param $dateDebut
     * @param $dateFin
     * @param $idOrganisateur
     * @param $nbPersonne
     */
    public function __construct(int $id, string $nomReunion, string $description, string $objectif, string $typeEvenement, Salle $salle, string $ville, DateDebut $dateDebut, DateDebut $dateFin, int $idOrganisateur, int $nbPersonne, int $prix)
    {
        $this->id = $id;
        $this->nomReunion = $nomReunion;
        $this->description = $description;
        $this->objectif = $objectif;
        $this->typeEvenement = $typeEvenement;
        $this->idSalle = $salle;
        $this->ville = $ville;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->idOrganisateur = $idOrganisateur;
        $this->nbPersonne = $nbPersonne;
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNomReunion()
    {
        return $this->nomReunion;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * @return mixed
     */
    public function getTypeEvenement()
    {
        return $this->typeEvenement;
    }

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->Salle;
    }

    public function ville(){
        return $this->Ville;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @return mixed
     */
    public function getIdOrganisateur()
    {
        return $this->idOrganisateur;
    }

    /**
     * @return mixed
     */
    public function getNbPersonne()
    {
        return $this->nbPersonne;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function checkDates(){
        if(($this->dateDebut) < ($this->dateFin)){
            return 1;
        }else{
            return 0;
        }
    }


    public function createMeetUP($id, $nomReunion, $description, $obectif, $typeEvenement, $idSalle, $dateDebut, $duree, $idOrganisateur, $nbPersonne){
            if($this->checkDates() == 0){
                throw UnableToCreateMeeting::invalidDateOfEnd();
            }

            return new self(

            );
    }

    public function checkChamps(){
        if(($this->nomReunion == null) || ($this->description == null) || ($this->objectif == null)){
            throw UnableToCreateMeeting::invalidField();
        }

        return new self;
    }

    public function checkTypeEvenement(){
        if($this->typeEvenement == "Public"){
            // On autorise les externes à s'inscrire
        }
    }


}