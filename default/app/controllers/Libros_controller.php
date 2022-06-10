<?php


class LibrosController extends AppController
{

    public function index($page = 1)
    {

      view::template('temp');

      $this->listLibros = (new Libros)->getLibros($page);


    /*     $usuarios = (new Libros)->find_all_by_sql("select * from libros");
          foreach ($usuarios as $usuario) {
            echo $usuario->id . "<br>";
          }   
         */
        //print $album;



    /*     $album = new Album();
      // $album->id = ;
       $album->nombre = 'Nirvana';
       $album->fecha = '2017-01-01';
       $album->valor = 80;
       $album->artista_id = 145;
       $album->estado = 'A';
       $album->save();  
       
        

    } */

}
}




?>