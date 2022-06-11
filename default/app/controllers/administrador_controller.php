<?php

class administradorController extends AppController {

        public function index () 
        {

            view::template('admin');
            View::select('administrador');
            
     
          }


}




?>