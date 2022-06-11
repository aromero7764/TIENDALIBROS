<?php
// para autenticar al usuario
class ServiciosController extends AppController {

        private function index () 
        {

        }

        public function userLogin(){

            View::select(NULL);
            View::template(NULL);
           
            $usuario = $_POST['usuario'];
            $pwd = $_POST['password'];
     
                var_dump($pwd);
                var_dump($usuario);
     
                $auth = new Auth("model", "class: usuarios", "login: $usuario", "password: $pwd");
                if ($auth->authenticate()) {

                     Redirect::to("/administrador");  

                } else {
                    echo "Usuario o Contraseña Invalidos";
                    Redirect::to("/login");
                }  
            }

            public function logout(){
                Auth::destroy_identity();
                Redirect::to("/inicio");
            }
        }

?>