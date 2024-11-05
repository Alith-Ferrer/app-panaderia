<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratos_laborale extends Model
{
    use HasFactory;

    protected $fillable=['Tipo_contrato_laboral','Fecha_inicio_contrato_laboral',
    'Fecha_fin_contrato_laboral','Salario_contrato_laboral','id_empleado'];
}
