<?php 
namespace App\Models;


class UsersModel extends Model
{
        protected $user_id;
        protected $nom_de_registre;
        protected $passe_word;
        protected $login_status;
        protected $email;
        
    // Constructeur
        public function __construct()
        {
            // On définit le nom de la table
                // $this->table = "users";

            // On définit la nom de la table, et on la passe en miniscule, 
            // on enlève le nom model, pour qu'il ne reste que le nom de la table
                $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
                $this->table = strtolower(str_replace('Model', '', $class));
        }


        /**
         * Get the value of user_id
         */
        public function getUserId()
        {
                return $this->user_id;
        }

        /**
         * Set the value of user_id
         */
        public function setUserId($user_id): self
        {
                $this->user_id = $user_id;

                return $this;
        }

        /**
         * Get the value of nom
         */
        public function getNom()
        {
                return $this->nom_de_registre;
        }

        /**
         * Set the value of nom
         */
        public function setNom($nom_de_registre): self
        {
                $this->nom_de_registre = $nom_de_registre;

                return $this;
        }

        /**
         * Get the value of passe_word
         */
        public function getPasseWord()
        {
                return $this->passe_word;
        }

        /**
         * Set the value of passe_word
         */
        public function setPasseWord($passe_word): self
        {
                $this->passe_word = $passe_word;

                return $this;
        }

        /**
         * Get the value of login_status
         */
        public function getLoginStatus()
        {
                return $this->login_status;
        }

        /**
         * Set the value of login_status
         */
        public function setLoginStatus($login_status): self
        {
                $this->login_status = $login_status;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }
    }
?>