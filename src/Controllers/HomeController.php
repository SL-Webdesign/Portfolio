<?php

namespace App\Controllers;

use App\Utils\View;

class HomeController
{
    public function index()
    {
        /**
         * to do recupéré des données
         */
        $title = 'home';
        View::render('home', ['title' => $title]);
    }
}