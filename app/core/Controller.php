<?php

class Controller
{

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function getDateTime()
    {
        date_default_timezone_set('Asia/Makassar');
        $date = date("d M Y G:i:s");
        return $date;
    }
}
