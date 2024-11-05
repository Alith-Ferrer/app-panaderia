<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_beneficio;

class TipoBeneficioController extends Controller
{
    
    public function save(Request $REQUEST){

        $tipo_beneficios=Tipo_beneficio ::create([
            'Tipo'=>$REQUEST ->Tipo,
            'id_beneficios'=>$REQUEST ->id_beneficios,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $tipo_beneficios,
        ]);
    }
    public function getData (Request $REQUEST){

        $tipo_beneficios=Tipo_beneficio ::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $tipo_beneficios
        ]);
    }
    public function update (Request $REQUEST){

        $tipo_beneficios=Tipo_beneficio ::findOrfail($REQUEST->id);

        $tipo_beneficios->update([
            'Tipo'=>$REQUEST ->Tipo,
            'id_beneficios'=>$REQUEST ->id_beneficios,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $REQUEST){

        $tipo_beneficios=Tipo_beneficio ::find($REQUEST->id);

        if($tipo_beneficios){
            $tipo_beneficios->delete();

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