<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestaciones_sociale;

class PrestacionesSocialeController extends Controller
{
    
    public function save(Request $REQUEST){

        $prestaciones_sociales=Prestaciones_sociale ::create([
            'Tipo_prestacion'=>$REQUEST ->Tipo_prestacion,
            'Nombre_prestacion_social'=>$REQUEST ->Nombre_prestacion_social,
            'Fecha_inicio_prestacion'=>$REQUEST ->Fecha_inicio_prestacion,
            'Fecha_fin_prestacion'=>$REQUEST ->Fecha_fin_prestacion,
            'id_contrato_laborar'=>$REQUEST ->id_contrato_laborar,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $prestaciones_sociales,
        ]);
    }
    public function getData (Request $REQUEST){

        $prestaciones_sociales=Prestaciones_sociale ::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $prestaciones_sociales
        ]);
    }
    public function getDataByid (Request $REQUEST){

        $prestaciones_sociales=Prestaciones_sociale ::where('id',$REQUEST->id)-> get();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $prestaciones_sociales
        ]);
    }
    public function update (Request $REQUEST){

        $prestaciones_sociales=Prestaciones_sociale ::findOrfail($REQUEST->id);

        $prestaciones_sociales->update([
            'Tipo_prestacion'=>$REQUEST ->Tipo_prestacion,
            'Nombre_prestacion_social'=>$REQUEST ->Nombre_prestacion_social,
            'Fecha_inicio_prestacion'=>$REQUEST ->Fecha_inicio_prestacion,
            'Fecha_fin_prestacion'=>$REQUEST ->Fecha_fin_prestacion,
            'id_contrato_laborar'=>$REQUEST ->id_contrato_laborar,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $REQUEST){

        $prestaciones_sociales=Prestaciones_sociale ::find($REQUEST->id);

        if($prestaciones_sociales){
            $prestaciones_sociales->delete();

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