<?php

namespace App\Models;

use App\Database\Db;



class HorairesModel extends Model
{


    //On définie le nom de la table
    protected $table = "horaires";

    // Propriétés
    /**
     * Horaires id
     *
     * @var int
     */
    public $id;

    /**
     * Horaires jour
     *
     * @var string
     */
    public $jour;

    /**
     * Horaires heure_debut
     *
     * @var string
     */
    public $heure_debut;

    /**
     * Horaires heure_fin
     *
     * @var string
     */
    public $heure_fin;

    /**
     * Exécute une requête SQL pour ce modèle Horaire
     *
     * @param string $query
     * @param mixed ...$params
     * @return mixed
     */
    protected function executeQuery(string $query,
        ...$params
    ) {
        $db = Db::getInstance();
        $stmt = $db->prepare($query);
        $stmt->execute($params);

        return $stmt;
    }

    private $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function updateHoraires(array $horaires): bool
    {
        try {
            $this->db->beginTransaction();

            foreach ($horaires as $jour => $horaire) {
                $heureDebut = $horaire['heure_debut'];
                $heureFin = $horaire['heure_fin'];

                $query = "UPDATE horaires SET heure_debut = ?, heure_fin = ? WHERE jour = ?";
                $stmt = $this->db->prepare($query);
                $stmt->execute([$heureDebut, $heureFin, $jour]);
            }

            $this->db->commit();
            return true;
        } catch (\Exception $e) {
            $this->db->rollBack();
            return false;
        }
    }

    public function fetchAll(): array
    {
        $query = "SELECT * FROM horaires";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function fetchByJour(string $jour)
    {
        $query = "SELECT * FROM horaires WHERE jour = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$jour]);
        return $stmt->fetch(\PDO::FETCH_OBJ) ?: null;
    }

    /**
     * Get the value of table
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set the value of table
     */
    public function setTable($table): self
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get horaires id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set horaires id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get horaires jour
     */
    public function getJour(): string
    {
        return $this->jour;
    }

    /**
     * Set horaires jour
     */
    public function setJour(string $jour): self
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get the value of heure_debut
     */
    public function getHeureDebut()
    {
        return $this->heure_debut;
    }

    /**
     * Set the value of heure_debut
     */
    public function setHeureDebut($heure_debut): self
    {
        $this->heure_debut = $heure_debut;

        return $this;
    }

    /**
     * Get the value of heure_fin
     */
    public function getHeureFin()
    {
        return $this->heure_fin;
    }

    /**
     * Set the value of heure_fin
     */
    public function setHeureFin($heure_fin): self
    {
        $this->heure_fin = $heure_fin;

        return $this;
    }
}


?>