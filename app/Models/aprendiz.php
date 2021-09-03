<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aprendiz extends Model
{
    use HasFactory;


    protected $table ='aprendizs';
    protected $prymaryKey ='id';
    protected $fillable = [
'idaprendiz',
'nombre',
'apellido',
'ificha',

    ];
}
