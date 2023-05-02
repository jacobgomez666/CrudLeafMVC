<?php

namespace Controllers; //Nombre de la ruta donde estoy

use Models\Contactos;  //Nombre del archivo (clase) en nuestro models

class ContactosController extends controller{

    public function index(){
        
        return view("contactos/index", ["contactos"=>Contactos::all()]);
        
    }

    
    public function crear(){
        return view("contactos/crear");
    }

    public function agregar(){
     $contacto = new Contactos;

     $contacto->nombre = app()->request()->get('nombre');
     $contacto->primerapellido = app()->request()->get('primerapellido');
     $contacto->segundoapellido = app()->request()->get('segundoapellido');
     $contacto->correo = app()->request()->get('correo');
     $contacto->save(); //metodo save del ORM, olvita de insert into el ya lo hace

    //  Despues de guardar los registros a la DB redirigir a la raiz
    return response()->redirect('/');

    }

    // Metodo borrar de las rutas en app() 
    //app()->get('/contactos/{id}', 'ContactosController@borrar');

    public function borrar($id){
       
        Contactos::destroy($id);
        return response()->redirect('/');
    
    }

    // Esta funcion nos devuelve solo obtiene el registro a editar
    public function editar($id){
       
        $datosContacto =  Contactos::find($id); //El método Find devuelve el modelo que tiene una clave principal que coincide con la clave especificada. 
        return view("contactos/editar", ["contacto"=>$datosContacto]);
    
    }

    // Funcion actualizar
    public function actualizar($id){
     
     $nombre = app()->request()->get('nombre');
     $primerapellido = app()->request()->get('primerapellido');
     $segundoapellido = app()->request()->get('segundoapellido');
     $correo = app()->request()->get('correo');

     $contacto= Contactos::findOrFail($id);

    //  Validacion
    $contacto->nombre=($nombre!="") ? $nombre : $contacto->nombre;
    $contacto->primerapellido=($primerapellido!="") ? $primerapellido : $contacto->primerapellido;
    $contacto->segundoapellido=($segundoapellido!="") ? $segundoapellido : $contacto->segundoapellido;
    $contacto->correo=($correo!="") ? $correo : $contacto->correo;

    $contacto->update();

    return response()->redirect('/');
    

        
    }


}