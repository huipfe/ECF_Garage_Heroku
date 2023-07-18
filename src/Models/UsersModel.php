<?php


namespace App\Models;

class UsersModel extends Model
{
        /**
         * $user_id
         *
         * @var [int]
         */
        private $user_id;

        /**
         * $password
         *
         * @var [string]
         */
        private $password;

        /**
         * $email
         *
         * @var [string]
         */
        private $email;

        /**
         * $is_admin
         *
         * @var [string]
         */

        private $is_admin;


        /**
         * $name_users
         *
         * @var [string]
         */

        private $name_users;

        
    // Constructeur
        public function __construct()
        {
            // On définit le nom de la table
                $this->table = "users";

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
         * Créer la sessions de l'utilisateur
         *
         * @param int $id
         * @return mixed
         */
        public function createUser(array $data): bool
        {
                $sql = "INSERT INTO {$this->table} (name_users, email, password)
                VALUES (:name_users, :email, :password)";
                $query = $this->requete($sql, [
                        'name_users' => $data['name_users'],
                        'email' => $data['email'],
                        'password' => $data['password']
                ]);
                return ($query->rowCount() === 1);
        }

        /**
         * Modifier un utilisateur
         *
         * @param array $data Données de l'utilisateur à modifier
         * @return bool True si la modification a réussi, false sinon
         */
        public function modifyUser(array $data): bool
        {
                $sql = "UPDATE {$this->table} SET name_users = :name_users, email = :email,
                password = :password WHERE user_id = :user_id";
                $query = $this->requete($sql, [
                        'user_id' => $data['user_id'],
                        'name_users' => $data['name_users'],
                        'email' => $data['email'],
                        'password' => $data['password']
                ]);
                return ($query->rowCount() === 1);
        }

        /**
         * Supprimer un utilisateur
         *
         * @param int $id ID de l'utilisateur à supprimer
         * @return bool True si la suppression a réussi, false sinon
         */

        public function deleteUser(int $id): bool
        {
                $sql = "DELETE FROM {$this->table} WHERE user_id = ?";
                return ($this->requete($sql, [$id])->rowCount() === 1);
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
         * Get the value of password
         */
        public function getPasseWord()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         */
        public function setPasseWord($password): self
        {
                $this->password = $password;

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

        /**
         * Get the value of is_admin
         */

        public function getIsAdmin()

        {
                return $this->is_admin;
        }

        /**
         * Set the value of is_admin
         */

        public function setIsAdmin($is_admin): self

        {
                $this->is_admin = $is_admin;

                return $this;
        }

        /**
         * Get the value of name_users
         */

        public function getNameUsers()

        {
                return $this->name_users;
        }

        /**
         * Set the value of name_users
         */

        public function setNameUsers($name_users): self

        {
                $this->name_users = $name_users;

                return $this;
        }



}
?>