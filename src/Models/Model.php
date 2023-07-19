<?php 
// Path: src\Models\Model.php
namespace App\Models;

// On importe la classe Db
use App\Database\Db;



class Model extends Db
{

    // Table de la base de données
    protected $table;

    // Instance de la classe Db
    private Db $db;

    /**
     * Méthode qui me permet d'aller chercher tout les éléments d'une table
     *
     * @return null|mixed
     */
    public function findAll()
    {
        // On retourne une requête SQL
        $query = $this->requete("SELECT * FROM `" . $this->table . "`");
        return $query->fetchAll();

    }

    /**
     * Méthode qui me permet d'aller chercher l'éléments choisie d'une table
     *
     * @param array $criteres
     * @return null|mixed
     */
    public function findBy(array $criteres)
    {
        $champs = [];
        $valeurs = [];
    
        // On boucle pour éclater ce tableau
        foreach ($criteres as $champ => $valeur) {
            // SELECT * FROM HomepageModel WHERE actif = ? AND signale = 0
            // bindValue(1, valeur)
            $champs[] = "$champ = ?";
            $valeurs[] = $valeur;
        }
        // On transforme le tableau en string (en chaîne de caractères)
        $liste_champs = implode(' AND ', $champs);
    
        // On peut exécuter la requête
        return $this->requete("SELECT * FROM `" . $this->table . "` WHERE ". $liste_champs,
        null, ...$valeurs)->fetchAll();
    }

    /**
     * Méthode qui me permet d'aller chercher l'éléments via l'id dans une table
     *
     * @param array $criteres
     * @return null|mixed
     */
    
    public function find(int $id)
    {
        // On retourne une requête SQL
        return $this->requete("SELECT * FROM {$this->table} WHERE id = $id")->fetch();
    }


    /**
     * Méthode qui me permet de créer un élément dans une table
     *
     * @param array $criteres
     * @return null|mixed
     */
    public function create()
    {
        $champs = [];
        $inter = [];
        $valeurs = [];
    
        // On récupère les propriétés définies dans le tableau de données
        // $donnees = get_object_vars($model);
    
        // On boucle pour éclater ce tableau
        foreach ($this as $champ => $valeur) {
            // INSERT INTO UserModel (nom, passe_word, email) VALUES (?, ?, ?)
            if ($valeurs !== null && $champ != "db" && $champ != "table" && $champ != "id") {
                // if ($champ === "password" && $valeur === null) {
                //     continue; // Ignorer la colonne 'passe_word' si elle est nulle
                // }
                $champs[] = $champ;
                $inter[] = "?";
                $valeurs[] = $valeur;
            }
        }
        
        // On transforme le tableau en string (en chaîne de caractères)
        $liste_champs = implode(', ', $champs);
        $list_inter = implode(', ', $inter);
    
        // On peut exécuter la requête
        return $this->requete("INSERT INTO `" . $this->table . "` (" . $liste_champs . ")
        VALUES (" . $list_inter . ")", null, ...$valeurs);
    }


    /**
     * Méthode qui me permet de mettre à jour un élément dans une table
     * @param int $id
     * @param array $criteres
     * @return null|mixed
     */


        public function update()
    {
        $champs = [];
        $valeurs = [];

        // On récupère les propriétés définies dans le tableau de données
        // $donnees = get_object_vars($model);

        // On boucle pour éclater ce tableau
        foreach ($this as $champ => $valeur) {
            // UPDATE page_d_accueil set HomepageModel image = ?, temoignage = ?, actif = ? WHERE id = ?
            if ($champ !== null && $champ != "db" && $champ != "table" && $champ != "id") {
                if ($champ === "image" && $valeur === null) {
                    continue; // Ignorer la colonne 'id_image' si elle est nulle
                }
                $champs[] = "$champ = ?";
                $valeurs[] = $valeur;
            }
        }

        // On ajoute l'id à la liste des valeurs
        $valeurs[] = $this->id;

        // On transforme le tableau en string (en chaîne de caractères)
        $liste_champs = implode(' , ', $champs);
    
        // On peut exécuter la requête
        return $this->requete("UPDATE `" . $this->table . "` SET " . $liste_champs .
        " WHERE id = ? ", null, ...$valeurs);
    }


    /**
     * Méthode qui me permet de supprimer un élément dans une table
     *
     * @param int $id
     * @return null|mixed
     */
    public function delete(int $id)
    {
        // On retourne une requête SQL
        return $this->requete("DELETE FROM {$this->table} WHERE id = ?", null, $id);
    }


    /**
     * @param string $query
     * @param array|null $fetchModeArgs
     * @param int|null $fetchMode
     * @return mixed
     * @throws \Exception
     * @throws \TypeError
     */
    // #[\ReturnTypeWillChange]
    // public function requete(string $query, ?int $fetchMode = null, ...$fetchModeArgs)
    public function requete(string $query, ?array $fetchModeArgs = null, ?int $fetchMode = null)
    {
        // On récupère l'instance Db
        $this->db = Db::getInstance();
    
        // On prépare la requête
        $stmt = $this->db->prepare($query);
        
        // On exécute la requête avec les arguments
        $stmt->execute($fetchModeArgs);
    
        // On vérifie si on a un fetchMode spécifié
        if ($fetchMode !== null) {
            // On retourne le résultat avec le fetchMode
            return $stmt;
        } else {
            // On retourne le résultat sans fetchMode
            return $stmt;
        }
    }


    /**
     * Méthode d'hydratation qui va vérifier si les setters existent et qui va les appeler
     *
     * @param array $donnees
     */
public function hydrate($donnees)
    {
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut key
            $setter = 'set' . ucfirst($key);
            // Si le setter correspondant existe
            if (method_exists($this, $setter)) {
                // On appelle le setter
                $this->$setter($value);
            }
        }
        return $this;
    }


}

?>