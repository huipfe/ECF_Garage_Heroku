<?php 
namespace App\Models;
use App\Models\Model;
use App\Database\Db;

/**
 * Objet Voiture
 *
 */

class CarsDetailsModel extends Model

{

    //On définie le nom de la table
    protected $table = "voiture";

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


    /**
     * Voiture description
     *
     * @var string
     */
    public $description;

    /**
     * $users_id
     *
     * @var [int]
     */
    private $users_id;

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
     * @param string $description Description de la voiture
     * @param int $users_id Id de l'utilisateur qui à mis la voiture
     */


    public function __construct(string $marque, string $modele, int $annee,
    int $kilometrage, int $prix, string $image, int $id, string $description, int $users_id)
    {
        // On attribut le nom à la propriété $nom à l'instance créer.
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->prix = $prix;
        $this->image = $image;
        $this->id = $id;
        $this->description = $description;
        $this->users_id = $users_id;
        
    }

    /**
     *  Création d'une voiture
     *
     * @param array $data
     * @return bool
     */
    public function createCar(array $data): bool
    {
        $sql = "INSERT INTO {$this->table} (marque, modele, annee, kilometrage, prix, image, description, users_id)
                VALUES (:marque, :modele, :annee, :kilometrage, :prix, :image, :description, :users_id)";
        $query = $this->requete(
            $sql,
            [
                "marque" => $data["marque"],
                "modele" => $data["modele"],
                "annee" => $data["annee"],
                "kilometrage" => $data["kilometrage"],
                "prix" => $data["prix"],
                "image" => $data["image"],
                "description" => $data["description"],
                "users_id" => $data["users_id"]
            ]
        );
        return ($query->rowCount() === 1);
    }

    /**
     * Met à jour une voiture
     *
     * @param array $data
     * @return bool
     */
    public function updateCar(array $data): bool
    {
        $sql = "UPDATE {$this->table} SET marque = :marque, modele = :modele,
        annee = :annee, kilometrage = :kilometrage, prix = :prix,
        image = :image, description = :description WHERE id = :id";
        $query = $this->requete(
            $sql,
            [
                "marque" => $data["marque"],
                "modele" => $data["modele"],
                "annee" => $data["annee"],
                "kilometrage" => $data["kilometrage"],
                "prix" => $data["prix"],
                "image" => $data["image"],
                "description" => $data["description"],
                "id" => $data["id"]
            ]
        );
        return ($query->rowCount() === 1);
    }

    public function deleteCar(int $id): bool
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $query = $this->requete($sql, ["id" => $id]);
        return ($query->rowCount() === 1);
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

    /**
     * Set voiture id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set voiture marque
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Set the value of modele
     */
    public function setModele($modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Set the value of annee
     */
    public function setAnnee($annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Set the value of kilometrage
     */
    public function setKilometrage($kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    
    /**
     * Affiche la description de la voiture
     * @param string $name
     * @return void
     */

    public function getDescription(string $description): void

    {
        $this->description = $description;
    }

    /**
     * Set the value of description
     */

    public function setDescription($description): self

    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of users_id
     */


    public function getUsersId(): int

    {
        return $this->users_id;
    }

    /**
     * Set the value of users_id
     */

    public function setUsersId(int $users_id): self

    {
        $this->users_id = $users_id;

        return $this;
    }
}


?>