<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestaciones_sociale extends Model
{
    use HasFactory;

    protected $fillable=['Tipo_prestacion','Nombre_prestacion_social',
    'Fecha_inicio_prestacion','Fecha_fin_prestacion','id_contrato_laborar'];
}