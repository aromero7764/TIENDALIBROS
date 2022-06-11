<?php


class LibrosController extends AppController
{

    public function index($page = 1)
    {
       

      view::template('admin');

      $this->listLibros = (new Libros)->getLibros($page);
    }

    public function del($id)
    {
        if ((new Libros())->delete((int) $id)) {
                Flash::valid('Operación exitosa');
        } else {
                Flash::error('Falló Operación');
        }

        //enrutando por defecto al index del controller
        return Redirect::to();
    }

    //funcion editar
    public function edit($id)
    {
        $libro = new Libros();
 
        //se verifica si se ha enviado el formulario (submit)
        if (Input::hasPost('libro')) {
 
            if ($libro->update(Input::post('libro'))) {
                 Flash::valid('Operación exitosa');
                //enrutando por defecto al index del controller
                return Redirect::to();
            }
            Flash::error('Falló Operación');
            return;
        }

        //Aplicando la autocarga de objeto, para comenzar la edición
        $this->libro = $libro->find_by_id((int) $id);
 
    }


    public function create()
    {

      view::template('admin');
      //Verificar si se envio un post
        if (Input::hasPost('libros')) {
            /**
             * se le pasa al modelo por constructor los datos del form y ActiveRecord recoge esos datos
             * y los asocia al campo correspondiente siempre y cuando se utilice la convención
             * model.campo
             */
            $menu = new Libros (Input::post('libros'));
            //En caso que falle la operación de guardar
            if ($menu->create()) {
                Flash::valid('Operación exitosa');
                //Eliminamos el POST, si no queremos que se vean en el form
                Input::delete();
                return;
            }
 
            Flash::error('Falló Operación');
        }
    }

}

?>