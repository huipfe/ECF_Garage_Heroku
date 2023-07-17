<?php

namespace App\Models;



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
     * Horaires heure_ouverture
     *
     * @var string
     */

    public $heure_debut;

    /**
     * Horaires heure_fermeture
     *
     * @var string
     */

    public $heure_fin;


    /**
     * Met à jour les horaires dans la base de données
     *
     * @param array $horaires
     * @return bool
     */
    public function updateHoraires(array $horaires): bool
    {
        // Début de la transaction
        $this->beginTransaction();

        try {
            // Supprimer tous les horaires existants
            $this->requete("DELETE FROM {$this->table}");

            // Insérer les nouveaux horaires
            foreach ($horaires as $horaire) {
                $this->requete(
                    "INSERT INTO {$this->table} (jour, heure_debut, heure_fin) VALUES (?, ?, ?)",
                    null,
                    $horaire['jour'],
                    $horaire['heure_debut'],
                    $horaire['heure_fin'],
                );
            }

            // Valider la transaction
            $this->commit();

            return true;
        } catch (\Exception $e) {
            // Annuler la transaction en cas d'erreur
            $this->rollBack();

            return false;
        }
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