<?php

require_once 'config/config.php';       // set Db info
require_once 'core/model.php';          // return model given as argument
require_once 'core/view.php';           // generate view
require_once 'core/controller.php';     // initialize models and views
require_once 'core/application.php';    // choose controller
//require_once 'core/helper.php';         // upload file & get_post

Application::start(); // run the application