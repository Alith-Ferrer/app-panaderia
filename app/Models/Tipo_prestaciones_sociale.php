<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_prestaciones_sociale extends Model
{
    use HasFactory;

    protected $fillable=['Tipo','id_prestacion_social'];
}