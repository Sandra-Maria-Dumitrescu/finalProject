<?php

class Controller
{
    public $view;
    public $model;
    public $data = array();

    function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }

    function action_index()
    {
    }
}
