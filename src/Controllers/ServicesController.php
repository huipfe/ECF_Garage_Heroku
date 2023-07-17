<?php

namespace App\Controllers;

use App\Models\ServicesModel;

class ServicesController extends Controller
{
    public function index()
    {
        $serviceModel = new ServicesModel();
        $services = $serviceModel->fetchAll();
        $this->render('Views/templates/Services', ['services' => $services]);
    }
}
