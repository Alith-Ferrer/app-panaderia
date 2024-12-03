<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_contrato;

class TipoContratoController extends Controller
{
    
    public function save(Request $REQUEST){

        $contratos_laborales=Tipo_contrato ::create([
            'Tipo'=>$REQUEST ->Tipo,
            'id_contrato_laborar'=>$REQUEST ->id_contrato_laborar,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $contratos_laborales,
        ]);
    }
    public function getData (Request $REQUEST){

        $contratos_laborales=Tipo_contrato ::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $contratos_laborales
        ]);
    }
    public function getDataByid (Request $REQUEST){

        $contratos_laborales=Tipo_contrato ::where('id',$REQUEST->id)-> get();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $contratos_laborales
        ]);
    }
    public function update (Request $REQUEST){

        $contratos_laborales=Tipo_contrato ::findOrfail($REQUEST->id);

        $contratos_laborales->update([
            'Tipo'=>$REQUEST ->Tipo,
            'id_contrato_laborar'=>$REQUEST ->id_contrato_laborar,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $REQUEST){

        $contratos_laborales=Tipo_contrato ::find($REQUEST->id);

        if($contratos_laborales){
            $contratos_laborales->delete();

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