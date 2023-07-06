<?php 
namespace App\Models;


class UsersModel extends Model
{
        /**
         * $user_id
         *
         * @var [int]
         */
        protected $user_id;

        /**
         * $passe_word
         *
         * @var [string]
         */
        protected $passe_word;

        /**
         * $email
         *
         * @var [string]
         */
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
         * Récupérer un utilisateur via son email
         *
         * @param string $email
         * @return mixed
         */
        public function findOneByEmail(string $email)
        {
                return $this->requete("SELECT * FROM {$this->table} WHERE email = ?", [$email])->fetch();
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