<?php

require_once "LoginController.php";

class Controller{

    public function Login($option,$array = []){
        return LoginController::Main($option,$array);
    }

}
