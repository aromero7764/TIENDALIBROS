<?php
Load::models('Album');

class LibrosController extends AppController
{

    public function index()
    {

        view::template(NULL);
        View::select(NULL); 


        $usuarios = (new Album)->find_all_by_sql("select * from album");
          foreach ($usuarios as $usuario) {
            echo $usuario->id . "<br>";
          }   
        
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