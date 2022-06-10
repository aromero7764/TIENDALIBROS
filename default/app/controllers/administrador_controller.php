<?php

class administradorController extends AppController {

        public function index () 
        {
            
          //validacion de inicio de sesion
          if(Auth::is_valid()){ 

            view::template('admin');
            View::select('administrador');
            
            //Listar los elementos de la tabla

           

            //si no es valida se va al login

           } else { Redirect::to("/login"); } 

            }
       


            public function mostrar () 
            
                      {

                        $resultado = 'echo "soy la funcion mostrar"';
                      }


}
 


?>