<?php 

namespace App\Models;

use App\Database\Db;




class ServicesModel extends Model
{

    protected $table = "service";
    private $db; // Ajoutez cette propriété pour la connexion à la base de données

    public function __construct()
    {
        $this->db = Db::getInstance(); // Initialisez la connexion à la base de données
    }

    /**
     * Service id
     *
     * @var int
     */
    private $id;

    /**
     * Service nom
     *
     * @var string
     */
    private $nom;

    /**
     * Service description
     *
     * @var string
     */
    private $description;

    /**
     * Service prix
     *
     * @var float
     */
    private $prix;

    /**
     * Service temps_estime
     *
     * @var int
     */
    private $tempsEstime;

    /**
     * Service image
     *
     * @var string (base64 encoded image)
     */
    private $image;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * Get the value of tempsEstime
     */
    public function getTempsEstime()
    {
        return $this->tempsEstime;
    }

    /**
     * Set the value of tempsEstime
     */
    public function setTempsEstime($tempsEstime)
    {
        $this->tempsEstime = $tempsEstime;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getAllServices()
    {
        $db = Db::getInstance();
        $query = "SELECT * FROM {$this->table}";
        $stmt = $db->query($query);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function fetchAll()
    {
        $query = "SELECT * FROM service";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $services = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            // Convertir les données de l'image en base64
            $row['image'] = base64_encode($row['image']);
            $services[] = $row;
        }

        return $services;
    }

}

?>