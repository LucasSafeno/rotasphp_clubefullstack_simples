<?php

namespace app\controllers;

class HomeController
{
    public function index($params)
    {
        dd($params);

        return Controller::view('home');
    }
}
