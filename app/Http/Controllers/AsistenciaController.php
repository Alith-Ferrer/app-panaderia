<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;

class AsistenciaController extends Controller
{
    
    public function save(Request $REQUEST){

        $asistencia=Asistencia ::create([
           
            'Fecha_asistencia'=>$REQUEST ->Fecha_asistencia,
            'Hora_entrada'=>$REQUEST ->Hora_entrada,
            'Hora_salida'=>$REQUEST ->Hora_salida,
            'id_empleado'=>$REQUEST ->id_empleado,
           
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $asistencia,
        ]);
    }
    public function getData (Request $REQUEST){

        $asistencia=Asistencia ::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $asistencia
        ]);
    }
    public function getDataByid (Request $REQUEST){

        $asistencia=Asistencia ::where('id',$REQUEST->id)-> get();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $asistencia
        ]);
    }
    public function update (Request $REQUEST){

        $asistencia=Asistencia ::findOrfail($REQUEST->id);

        $asistencia->update([
            'Fecha_asistencia'=>$REQUEST ->Fecha_asistencia,
            'Hora_entrada'=>$REQUEST ->Hora_entrada,
            'Hora_salida'=>$REQUEST ->Hora_salida,
            'id_empleado'=>$REQUEST ->id_empleado,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $REQUEST){

        $asistencia=Asistencia ::find($REQUEST->id);

        if($asistencia){
            $asistencia->delete();

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
