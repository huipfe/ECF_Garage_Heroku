<?php 

namespace App\Core;

class Form
{

    private $formCode =  '';

    /**
     * Génére le formulaire HTML
     *
     * @return string
     */
    public function create()
    {
        return $this->formCode;
    }

    /**
     * Valide si tout les champs proposés sont remplis
     *
     * @param array $form Tableau issu du formulaire ($_POST, $_GET)
     * @param array $champs Tableau listant les champs obligatoires
     * @return bool
     */
    public static function validate(array $form, array $champs)
    {
        // On parcours les champs, avec un foreach
        foreach ($champs as $champ) {
            // Si le champ est absent ou vide dans le formulaire
            if(!isset($form[$champ]) || empty($form[$champ])){
                // On sort en retournant false
                return false;
            }
        }
        // Sinon
        return true;
    }

    /**
     * Ajoute les attributs envoyés à la balise
     *
     * @param array $attributs Tableau associatifs ['class' => 'form-control', 'required' => true]
     * @return string Chaine de caractères générée
     */
    private function ajoutAttributs (array $attributs) : string
    {
        // On initialise une chaine de caractères
        $str = '';

        // On liste les attributs "courts"
        $courts = ['checked', 'disabled', 'readonly', 'multiple', 'required', 'autofocus', 'novalidate,',
        'formvalidate'];

        // On boucle sur le tableau
        foreach($attributs as $attribut => $valeur){
            // Si l'attribut est dans la liste des attributs courts
            if(in_array($attribut, $courts) && $valeur == true) {
                $str .= " $attribut";

            // Si jamais c'est pas un attribut courts, ou si sa valeur est false
            }else {
                // On ajoute attribut = 'valeur'
                $str .= " $attribut='valeur'";
            }
        }

        return $str;
    }

    /**
     * Faire la balise d'ouverture du forumulaire
     *
     * @param string $methode Méthode du formulaire (post ou get)
     * @param string $action Action du formulaire
     * @param array $attributs Attributs
     * @return Form
     */
    public function debutForm(string $methode = 'post', string $action = '#',
    array $attributs = []) :self
    {
        // On créer la balise form
        $this->formCode .= "<form action='$action' method='$methode'";

        // On ajoute les attributs éventuels
        if($attributs){
            $this ->formCode .= $attributs ? $this->ajoutAttributs($attributs).'>' : '>';
        }
        return $this;
    }

    /**
     * Balise de fermeture du formulaire
     *
     * @return self
     */
    public function finForm():self
    {
        $this->formCode .= "</form>";
        return $this;
    }

    public function ajoutLabelFor(string $for, string $texte, array $attributs = []): self
    {
        // Ouvre la balise
        $this->formCode .= "<label for= '$for'";

        // On ajoute les attributs
        $this ->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        // On ajoute le texte
        $this->formCode .= ">$texte</label>";


        return $this;
    }
}


?>