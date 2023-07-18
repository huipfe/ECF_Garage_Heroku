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
    private $temps_estime;

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
        return $this->temps_estime;
    }

    /**
     * Set the value of tempsEstime
     */
    public function setTempsEstime($temps_estime)
    {
        $this->temps_estime = $temps_estime;
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

    /**
     * Récupère tous les services
     *
     * @return array
     */
    public function fetchAll()
    {
        $query = "SELECT * FROM service";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $services = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            // Décoder les données de l'image
            $row['image'] = base64_decode($row['image']);
            $services[] = $row;
        }

        return $services;
    }

    /**
     *  Création d'un Service
     *
     * @param array $data
     * @return bool
     */
    public function createService(array $data): bool
    {
        $sql = "INSERT INTO {$this->table} (nom, temps_estime, prix, description, image)
                VALUES (:nom, :temps_estime, :prix, :description, :image)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nom', $data['nom']);
        $stmt->bindValue(':temps_estime', $data['temps_estime']);
        $stmt->bindValue(':prix', $data['prix']);
        $stmt->bindValue(':description', $data['description']);
        $stmt->bindValue(':image', base64_encode($data['image']));
        return $stmt->execute();
    }

    /**
     * Met à jour un Service
     *
     * @param array $data
     * @return bool
     */
    public function updateService(array $data): bool
    {
        $sql = "UPDATE {$this->table} SET nom = :nom, temps_estime = :temps_estime,
            prix = :prix, image = :image, description = :description WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute([
            'id' => $data['id'],
            'nom' => $data['nom'],
            'temps_estime' => $data['temps_estime'],
            'prix' => $data['prix'],
            'image' => base64_encode($data['image']),
            'description' => $data['description']
        ]);
        return ($query->rowCount() === 1);
    }

    /**
     * Supprime un Service
     *
     * @param integer $id
     * @return bool
     */
    public function deleteService(int $id): bool
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id]);
        return ($query->rowCount() === 1);
    }
}
?>