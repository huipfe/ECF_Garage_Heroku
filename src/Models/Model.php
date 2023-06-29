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
    private $db;

    // Méthode qui me permet d'aller chercher tout les éléments d'une table
    public function findAll()
    {
        // On retourne une requête SQL
        $query = $this->requete("SELECT * FROM `" . $this->table . "`");
        return $query->fetchAll();  

    }

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
        return $this->requete("SELECT * FROM `" . $this->table . "` WHERE ". $liste_champs, null, ...$valeurs)->fetchAll();
    }
    
    public function find(int $id)
    {
        // On retourne une requête SQL
        return $this->requete("SELECT * FROM {$this->table} WHERE id = $id")->fetch();
    }

    public function create(Model $model)
    {
        $champs = [];
        $inter = [];
        $valeurs = [];
    
        // On récupère les propriétés définies dans le tableau de données
        $donnees = get_object_vars($model);
    
        // On boucle pour éclater ce tableau
        foreach ($donnees as $champ => $valeur) {
            // INSERT INTO UserModel (nom, passe_word, email) VALUES (?, ?, ?)
            if ($champ != null && $champ != "db" && $champ != "table" && $champ != "id") {
                if ($champ === "passe_word" && $valeur === null) {
                    continue; // Ignorer la colonne 'passe_word' si elle est nulle
                }
                $champs[] = $champ;
                $inter[] = "?";
                $valeurs[] = $valeur;
            }
        }
        
        // On transforme le tableau en string (en chaîne de caractères)
        $liste_champs = implode(', ', $champs);
        $list_inter = implode(', ', $inter);
    
        // On peut exécuter la requête
        return $this->requete("INSERT INTO `" . $this->table . "` (" . $liste_champs . ") VALUES (" . $list_inter . ")", null, ...$valeurs);
    }



        public function update(int $id, Model $model)
    {
        $champs = [];
        $valeurs = [];
    
        // On récupère les propriétés définies dans le tableau de données
        $donnees = get_object_vars($model);
    
        // On boucle pour éclater ce tableau
        foreach ($donnees as $champ => $valeur) {
            // UPDATE page_d_accueil set HomepageModel image = ?, temoignage = ?, actif = ? WHERE id = ?
            if ($champ != null && $champ != "db" && $champ != "table" && $champ != "id") {
                if ($champ === "id_image" && $valeur === null) {
                    continue; // Ignorer la colonne 'id_image' si elle est nulle
                }
                $champs[] = "$champ = ?";
                $valeurs[] = $valeur;
            }
        }
        
        // On ajoute l'id à la liste des valeurs
        $valeurs[] = $id;

        // On transforme le tableau en string (en chaîne de caractères)
        $liste_champs = implode(' , ', $champs);
    
        // On peut exécuter la requête
        return $this->requete("UPDATE `" . $this->table . "` SET " . $liste_champs . " WHERE id_image = ? ", null, ...$valeurs);
    }


    public function delete(int $id)
    {
        // On retourne une requête SQL
        return $this->requete("DELETE FROM {$this->table} WHERE id_image = ?", null, $id);
    }



    #[\ReturnTypeWillChange]
    public function requete(string $query, ?int $fetchMode = null, ...$fetchModeArgs)
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
            return $stmt->fetchAll($fetchMode);
        } else {
            // On retourne le résultat sans fetchMode
            return $stmt->fetchAll();
        }
    }

    //Méthode d'hydratation qui va vérifier si les setters existent et qui va les appeler
public function hydrate(array $donnees)
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