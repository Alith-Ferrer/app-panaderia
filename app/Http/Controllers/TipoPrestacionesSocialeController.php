<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_prestaciones_sociale;

class TipoPrestacionesSocialeController extends Controller
{
    
    public function save(Request $REQUEST){

        $tipo_prestaciones_sociales=Tipo_prestaciones_sociale ::create([
            'Tipo'=>$REQUEST ->Tipo,
            'id_prestacion_social'=>$REQUEST ->id_prestacion_social,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $tipo_prestaciones_sociales,
        ]);
    }
    public function getData (Request $REQUEST){

        $tipo_prestaciones_sociales=Tipo_prestaciones_sociale ::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $tipo_prestaciones_sociales
        ]);
    }
    public function update (Request $REQUEST){

        $tipo_prestaciones_sociales=Tipo_prestaciones_sociale ::findOrfail($REQUEST->id);

        $tipo_prestaciones_sociales->update([
            'Tipo'=>$REQUEST ->Tipo,
            'id_prestacion_social'=>$REQUEST ->id_prestacion_social,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $REQUEST){

        $tipo_prestaciones_sociales=Tipo_prestaciones_sociale ::find($REQUEST->id);

        if($tipo_prestaciones_sociales){
            $tipo_prestaciones_sociales->delete();

            return response()->json([
                'status' => '200',
                'message' => 'Se elimino con exito',
            ]);  
        }else{

            return response()->json([
                'status' => '204',
                'message' => 'El id no se encontro',
            ]);  
        }
    }
}