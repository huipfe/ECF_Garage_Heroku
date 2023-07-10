<?php

namespace App\Controllers;


class ContactController extends Controller
{
    public function index()
    {
        $this->render('/Views/templates/Contact');
    }
}
