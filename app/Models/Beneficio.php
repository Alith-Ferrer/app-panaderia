<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    use HasFactory;
    protected $fillable=['Nombre_beneficio','Tipo_beneficio','Monto_correspondiente_beneficio','id_contrato_laborar',];
}