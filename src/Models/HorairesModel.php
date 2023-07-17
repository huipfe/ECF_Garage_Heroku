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

    /**
     * Met à jour les horaires dans la base de données
     *
     * @param array $horaires
     * @return bool
     */
    public function updateHoraires(array $horaires): bool
    {
        // Début de la transaction
        $db = Db::getInstance();
        $db->beginTransaction();

        try {
            foreach ($horaires as $jour => $horaire) {
                $heureDebut = $horaire['heure_debut'];
                $heureFin = $horaire['heure_fin'];

                // Vérifier si l'horaire existe déjà
                $existingHoraire = $this->fetchByJour($jour);

                if ($existingHoraire) {
                    // Mettre à jour l'horaire existant
                    $query = "UPDATE {$this->table} SET heure_debut = ?, heure_fin = ? WHERE jour = ?";
                    $this->executeQuery($query, $heureDebut, $heureFin, $jour);
                } else {
                    // Insérer un nouvel horaire
                    $query = "INSERT INTO {$this->table} (jour, heure_debut, heure_fin) VALUES (?, ?, ?)";
                    $this->executeQuery($query, $jour, $heureDebut, $heureFin);
                }
            }

            // Valider la transaction
            $db->commit();

            return true;
        } catch (\Exception $e) {
            // Annuler la transaction en cas d'erreur
            $db->rollBack();

            return false;
        }
    }


    /**
     * Récupère un horaire par jour
     *
     * @param string $jour
     * @return mixed|null
     */
    public function fetchByJour(string $jour)
    {
        $query = "SELECT * FROM {$this->table} WHERE jour = ?";
        $stmt = $this->executeQuery($query, $jour);
        $result = $stmt->fetch(\PDO::FETCH_OBJ);

        return $result ?: null;
    }

    /**
     * Récupère tous les horaires depuis la base de données
     *
     * @return array
     */
    public function fetchAll(): array
    {
        // Connexion à la base de données
        $db = \App\Database\Db::getInstance();

        // Requête SQL
        $query = "SELECT * FROM {$this->table}";

        // Exécution de la requête
        $stmt = $db->query($query);

        // Récupération des résultats
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
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