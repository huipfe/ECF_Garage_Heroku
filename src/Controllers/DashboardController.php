<?php 

namespace App\Controllers;


class DashboardController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Dashboard');

    }
}
