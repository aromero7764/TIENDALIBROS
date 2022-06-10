<?php

class LoginController extends AppController {

    public function index () 
    {
        view::template('temp');//Ver método select[1]
        View::select('login'); //no mostramos la vista, solo el template
    }
}


?>