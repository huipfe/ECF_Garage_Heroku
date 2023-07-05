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

}


?>