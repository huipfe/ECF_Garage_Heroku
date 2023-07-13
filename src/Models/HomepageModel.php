<?php 
namespace App\Models;
// use App\Models\Model;

class HomepageModel extends Model
{
        protected $id_image;
        protected $Temoignage;
        
    // Constructeur
        public function __construct()
        {
            // On définit le nom de la table
                $this->table = "page_d_accueil";
        }


        /**
         * Get the value of id_image
         */
        public function getIdImage()
        {
                return $this->id_image;
        }

        /**
         * Set the value of id_image
         */
        public function setIdImage($id_image): self
        {
                $this->id_image = $id_image;

                return $this;
        }

        /**
         * Get the value of Temoignage
         */
        public function getTemoignage()
        {
                return $this->Temoignage;
        }

        /** 
         * Set the value of Temoignage
         */
        public function setTemoignage($Temoignage): self
        {
                $this->Temoignage = $Temoignage;

                return $this;
        }
}
?>