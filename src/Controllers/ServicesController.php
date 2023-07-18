<?php

namespace App\Controllers;

use App\Models\ServicesModel;

class ServicesController extends Controller
{

    /**
     * Affiche la liste des services
     *
     * @return void
     */
    public function index()
    {
        // On récupère les services
        $serviceModel = new ServicesModel();
        $services = $serviceModel->fetchAll();
        // On affiche la vue
        $this->render('Views/templates/Services', ['services' => $services]);
    }

    public function ajouter()
    {
        // On affiche la vue
        $this->render('Views/templates/ServicesAdd');
    }

    public function modifier($id)
    {
        // On récupère le service
        $serviceModel = new ServicesModel();
        $service = $serviceModel->find($id);
        // On affiche la vue
        $this->render('Views/templates/ServicesModify', ['service' => $service]);
    }

    public function delete($id)
    {
        $serviceModel = new ServicesModel();
        $serviceModel->delete($id);
        header('Location: /ECF_Garage/public/services');
    }
}
