<?php

namespace App\Controllers;


class ServicesController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Services');
    }
}
