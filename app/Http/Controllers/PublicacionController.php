<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    ////Crea Publicacion
    public function crearPublicacion(Request $request){
        $publicacion=new Publicacion();
        $publicacion->titulo=$request->titulo;
        $publicacion->introduccion=$request->introduccion;
        $publicacion->contenido=$request->contenido;//link_imagen
        $publicacion->unidad=$request->unidad;
        $publicacion->link_imagen=$request->link_imagen;
        $publicacion->slug=$request->slug;
        $publicacion->save();
        return response()->json(['mensaje'=>'publicacion creada']);
        
    }
    
    //Elimina
    public function eliminarPublicacion(Request $request){
        $publicacion=Publicacion::find($request->id);
        $publicacion->delete();
        return response()->json(['mensaje'=>'publicacion eliminada de forma correcta']);
    }

    //mostrar
    public function mostrarPublicacion($slug){
        $publicacion=Publicacion::where('slug',$slug)->firstorFail();
        return view('publicacion',['publicacion'=>$publicacion]);
    }

    //test
    public function mostrarTodo(){
       $publicaciones=Publicacion::all();
       return view('index',['publicaciones'=>$publicaciones]);
    }    
}
