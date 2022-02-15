<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    protected $fillable=['nome','sigla','data_cadastro'];
    const CREATED_AT='data_cadastro';
    const UPDATED_AT='data_actualizacao';

    
}
