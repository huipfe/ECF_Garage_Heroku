<?php

namespace App\Core;

class Form
{

    private $formCode = '';

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
            if (!isset($form[$champ]) || empty($form[$champ])) {
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
    private function ajoutAttributs(array $attributs): string
    {
        // On initialise une chaine de caractères
        $str = '';

        // On liste les attributs "courts"
        $courts = [
            'checked', 'disabled', 'readonly', 'multiple',
            'required', 'autofocus', 'novalidate,', 'formnovalidate'
        ];

        // On boucle sur le tableau
        foreach ($attributs as $attribut => $valeur) {
            // Si l'attribut est dans la liste des attributs courts
            if (in_array($attribut, $courts) && $valeur == true) {
                $str .= " $attribut";

                // Si jamais c'est pas un attribut courts, ou si sa valeur est false
            } else {
                // On ajoute attribut = 'valeur'
                $str .= " $attribut='$valeur'";
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
    public function debutForm(string $methode = 'post', string $action = '#', array $attributs = []): self
    {
        // On créer la balise form
        $this->formCode .= "<form action='$action' method='$methode'";

        // On ajoute les attributs éventuels
        if ($attributs) {
            $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) . '>' : '>'; // Ajout du caractère '>' ici
        } else {
            $this->formCode .= '>'; // Ajout du caractère '>' ici
        }

        return $this;
    }


    /**
     * Balise de fermeture du formulaire
     *
     * @return Form
     */
    public function finForm(): self
    {
        $this->formCode .= "</form>";
        return $this;
    }

    /**
     * Ajout d'un Label
     *
     * @param string $for
     * @param string $texte
     * @param array $attributs
     * @return Form
     */
    public function ajoutLabelFor(string $for, string $texte, array $attributs = []): self
    {
        // On ouvre la balise
        $this->formCode .= "<label for='$for'";

        // On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        // On ajoute le texte
        $this->formCode .= ">$texte</label>";

        return $this;
    }


    /**
     * Ajout d'un input
     *
     * @param string $type
     * @param string $nom
     * @param array $attributs
     * @return self
     */
    public function ajoutInput(string $type, string $nom, array $attributs = []): self
    {
        // On ouvre la balise
        $this->formCode .= "<input type='$type' name='$nom'";

        // On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        // On ferme la balise
        $this->formCode .= '>';

        return $this;
    }

    /**
     * Ajout du textearea
     *
     * @param string $nom
     * @param string $valeur
     * @param array $attributs
     * @return self
     */
    public function ajoutTextarea(string $nom, string $valeur = '', array $attributs =[]):self
    {
        // On ouvre la balise
        $this->formCode .= "<textarea name='$nom'";

        // On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        // On ferme la balise
        $this->formCode .= ">$valeur</textarea>";

        return $this;
    }

    /**
     * Ajout du select
     *
     * @param string $nom
     * @param array $options
     * @param array $attributs
     * @return self
     */
    public function ajoutSelect(string $nom, array $options, array $attributs = []):self
    {

        // On créer le select
        $this->formCode .= "<select name='$nom'";


        // On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        // On ferme la balise
        $this->formCode .= ">";

        // On boucle sur les options

        foreach ($options as $valeur => $texte) {
            $this->formCode .= "<option value='$valeur'>$texte</option>";
        }

        // On ferme le select
        $this->formCode .= "</select>";

        return $this;

    }

    /**
     * Ajout du bouton
     *
     * @param string $texte
     * @param array $attributs
     * @return self
     */

    public function ajoutBouton(string $texte, array $attributs = []):self
    {
        // On ouvre la balise
        $this->formCode .= "<button";

        // On ajoute les attributs
        $this->formCode .= $attributs ? $this->ajoutAttributs($attributs) : '';

        // On ajoute le texte et on ferme la balise
        $this->formCode .= ">$texte</button>";

        return $this;
    }

}


?>
