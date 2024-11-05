<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_beneficio extends Model
{
    use HasFactory;
    protected $fillable=['Tipo','id_beneficios',];
}