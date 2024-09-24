<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
 //
 public function save(Request $REQUEST){
    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
    ]);
}
public function getData (Request $REQUEST){
    return response()->json([
        'status' => '200',
        'message' => 'data..',
    ]);
}
public function update (Request $REQUEST){
    return response()->json([
        'status' => '200',
        'message' => 'guardado con exito',
    ]);
}
public function delete (Request $REQUEST){
    return response()->json([
        'status' => '200',
        'message' => 'Se elimino con exito',
    ]);
}
}
