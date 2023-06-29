<?php 
/**
 * Objet Voiture
 * 
 */

class Cars_details
{
    // Propriétés
    /**
     * Voiture id
     *
     * @var int
     */
    public $id;

    /**
     * Voiture marque
     *
     * @var string
     */
    public $marque;

    /**
     * Voiture modele
     *
     * @var string
     */

    public $modele;

    /**
     * Voiture annee
     *
     * @var int
     */

    public $annee;

    /**
     * Voiture kilometrage
     *
     * @var int
     */

    public $kilometrage;

    /**
     * Voiture prix
     *
     * @var int
     */

    public $prix;

    /**
     * Voiture image
     *
     * @var string
     */

    public $image;



    // Méthodes
    /**
     * Constructeur de la voiture
     *
     * @param string $marque Marque de la voiture
     * @param string $modele Modele de la voiture
     * @param int $annee Annee de la voiture
     * @param int $kilometrage Kilometrage de la voiture
     * @param int $prix Prix de la voiture
     * @param string $image Image de la voiture
     * @param int $id Id de la voiture
     */


    public function __construct(string $marque, string $modele, int $annee,
    int $kilometrage, int $prix, string $image, int $id)
    {
        // On attribut le nom à la propriété $nom à l'instance créer.
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->prix = $prix;
        $this->image = $image;
        $this->id = $id;
        
    }

    /**
     * Affiche la marque de la voiture
     * @param string $name
     * @return void
     */
    public function getMarque(string $marque): void

    {
        $this->marque = $marque;
    }

    /**
     * Affiche le modele de la voiture
     * @param string $name
     * @return void
     */
    public function getModele(string $modele): void

    {
        $this->modele = $modele;
    }

    /**
     * Affiche l'annee de la voiture
     * @param int $name
     * @return void
     */
    public function getAnnee(int $annee): void
    {
        $this->annee = $annee;
    }

    /**
     * Affiche le kilometrage de la voiture
     * @param int $name
     * @return void
     */
    public function getKilometrage(int $kilometrage): void
    {
        $this->kilometrage = $kilometrage;
    }

    /**
     * Affiche le prix de la voiture
     * @param int $name
     * @return void
     */
    public function getPrix(int $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * Affiche l'image de la voiture
     * @param string $name
     * @return void
     */
    public function getImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Affiche l'id de la voiture
     * @param int $name
     * @return void
     */
    public function getId(int $id): void
    {
        $this->id = $id;
    }

}


















?>