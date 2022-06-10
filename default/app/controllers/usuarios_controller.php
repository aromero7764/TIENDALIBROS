<?php

   /*  class UsuariosController extends AppController
    {
    
        public function login(){
            if (Input::hasPost("login","password")){
                $pwd = Input::post("password");
                $usuario=Input::post("login");
     
                $auth = new Auth("model", "class: usuarios", "login: $usuario", "password: $pwd");
                if ($auth->authenticate()) {
                    Redirect::to("/");
                } else {
                    Flash::error("Falló");
                }
            }
        }
        
        public function logout(){
            Auth::destroy_identity();
            Redirect::to("/");
        }



    }
 */
    
    
?>