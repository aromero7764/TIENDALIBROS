<?php

        class ProductosController extends AppController {

        public function index () 
        {
            view::template('temp');//Ver método select[1]
            //View::select('inicio'); //no mostramos la vista, solo el template
        }
        }


?>