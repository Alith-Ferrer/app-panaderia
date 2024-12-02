<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contratos_laborale;

class contratoslaboraleController extends Controller
{
    
    public function save(Request $REQUEST){

        $tipo_contratos=contratos_laborale ::create([
            'Tipo_contrato_laboral'=>$REQUEST ->Tipo_contrato_laboral,
            'Fecha_inicio_contrato_laboral'=>$REQUEST ->Fecha_inicio_contrato_laboral,
            'Fecha_fin_contrato_laboral'=>$REQUEST ->Fecha_fin_contrato_laboral,
            'Salario_contrato_laboral'=>$REQUEST ->Salario_contrato_laboral,
            'id_empleado'=>$REQUEST ->id_empleado,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $tipo_contratos,
        ]);
    }
    public function getData (Request $REQUEST){

        $tipo_contratos=contratos_laborale ::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $tipo_contratos
        ]);
    }
    public function getDataByid (Request $REQUEST){

        $tipo_contratos=contratos_laborale ::where('id',$REQUEST->id)-> get();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $tipo_contratos
        ]);
    }
    public function update (Request $REQUEST){

        $tipo_contratos=contratos_laborale ::findOrfail($REQUEST->id);

        $tipo_contratos->update([
            'Tipo_contrato_laboral'=>$REQUEST ->Tipo_contrato_laboral,
            'Fecha_inicio_contrato_laboral'=>$REQUEST ->Fecha_inicio_contrato_laboral,
            'Fecha_fin_contrato_laboral'=>$REQUEST ->Fecha_fin_contrato_laboral,
            'Salario_contrato_laboral'=>$REQUEST ->Salario_contrato_laboral,
            'id_empleado'=>$REQUEST ->id_empleado,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $REQUEST){

        $tipo_contratos=contratos_laborale ::find($REQUEST->id);

        if($tipo_contratos){
            $tipo_contratos->delete();

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