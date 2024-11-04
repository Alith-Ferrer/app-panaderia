<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;


class EmpleadoController extends Controller
{
    
    public function save(Request $REQUEST){

        $empleado=Empleado ::create([
            'Nombre_empleado'=>$REQUEST ->Nombre_empleado,
            'Fecha_ingreso'=>$REQUEST ->Fecha_ingreso,
            'Codigo_empleado'=>$REQUEST ->Codigo_empleado,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            'data' => $empleado,
        ]);
    }
    public function getData (Request $REQUEST){

        $empleado=Empleado ::all();

        return response()->json([
            'status' => '200',
            'message' => 'data..',
            'result' => $empleado
        ]);
    }
    public function update (Request $REQUEST){

        $empleado=Empleado ::findOrfail($REQUEST->id);

        $empleado->update([
            'Nombre_empleado'=>$REQUEST ->Nombre_empleado,
            'Fecha_ingreso'=>$REQUEST ->Fecha_ingreso,
            'Codigo_empleado'=>$REQUEST ->Codigo_empleado,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $REQUEST){

        $empleado=Empleado ::find($REQUEST->id);

        if($empleado){
            $empleado->delete();

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
