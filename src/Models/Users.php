<!-- Page de profil utilisateur : US1. Se connecter, US3. Si Admin Définir les horaires d’ouverture -->
<?php 
/**
 * Objet Compte administrateur
 */
abstract class Users
{
    // Propriétés
    /**
     * Compte user_id
     *
     * @var int
     */
    public $user_id;


    /**
     * Compte email
     *
     * @var string
     */
    public $nom_de_registre;


    /**
     * Compte passe_word
     *
     * @var string
     */

    public $passe_word;



    /**
     * Compte login_status
     *
     * @var string
     */

    public $login_status;


    /**
     * Compte email
     *
     * @var string
     */


    public $email;




    // Méthodes
    /**
     * Constructeur du compte
     *
     * @param int $user_id user_id du compte
     * @param string $nom_de_registre nom_de_registre du compte
     * @param string $passe_word passe_word du compte
     * @param string $login_status login_status du compte
     * @param string $email email du compte
     */
    public function __construct(string $nom_de_registre, int $user_id)
    {
        // On attribut le nom_de_registre à la propriété $nom_de_registre à l'instance créer.
        $this->nom_de_registre = $nom_de_registre;
        $this->user_id = $user_id;
        
    }

    /**
     * Affiche le nom_de_registre du compte
     * @param string $nom_de_registre
     * @return void
     */
    public function getNom(string $nom_de_registre): void
    {

        $this->nom_de_registre = $nom_de_registre;

    }

    /**
     * Mot de passe du compte
     * @param string $passe_word
     * @return void
     */

    public function getPassword(string $passe_word): void
    {
            
        $this->passe_word = $passe_word;
    
    }

    public function getID(int $user_id): void
    {
            
    echo "Votre user_id est : " . $this->user_id . "<br>";
    
    }

    /**
     * Affiche le login_status du compte
     * @param string $login_status
     * @return void
     */


    public function getLoginStatus(string $login_status): void

    {
            
        $this->login_status = $login_status;
    
    }

    /**
     * Affiche l'email du compte
     * @param string $email
     * @return void
     */

    public function getEmail(string $email): void

    {
            
        $this->email = $email;
    
    }



}








?>