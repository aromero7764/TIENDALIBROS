<?php

class Libros extends ActiveRecord 

{
  //modelo Libros / creo una funcion para listar los libros paginador

  public function getLibros($page, $ppage=20)
  {
      return $this->paginate("page: $page", "per_page: $ppage", 'order: id asc');
  }

   
}




/* public function consultaTodo()
    
    {
        $usuarios = (new Libros)->find_all_by_sql("select * from libros");
          foreach ($usuarios as $usuario) {
            echo $usuario->id . "<br>";
          } 

    } */


?>






