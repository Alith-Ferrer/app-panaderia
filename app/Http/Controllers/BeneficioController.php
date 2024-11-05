<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beneficio;

class BeneficioController extends Controller
{
    
    public function save(Request $REQUEST){

        $beneficios=Beneficio ::create([
            'Nombre_beneficio'=>$REQUEST ->Nombre_beneficio,
            'Tipo_beneficio'=>$REQUEST ->Tipo_beneficio,
            'Monto_correspondiente_beneficio'=>$REQUEST ->Monto_correspondiente_beneficio,
            'id_contrato_laborar'=>$REQUEST ->id_contrato_laborar,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $beneficios,
        ]);
    }
    public function getData (Request $REQUEST){

        $beneficios=Beneficio ::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $beneficios
        ]);
    }
    public function update (Request $REQUEST){

        $beneficios=Beneficio ::findOrfail($REQUEST->id);

        $beneficios->update([
            'Nombre_beneficio'=>$REQUEST ->Nombre_beneficio,
            'Tipo_beneficio'=>$REQUEST ->Tipo_beneficio,
            'Monto_correspondiente_beneficio'=>$REQUEST ->Monto_correspondiente_beneficio,
            'id_contrato_laborar'=>$REQUEST ->id_contrato_laborar,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $REQUEST){

        $beneficios=Beneficio ::find($REQUEST->id);

        if($beneficios){
            $beneficios->delete();

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