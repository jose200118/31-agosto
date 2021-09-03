<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    use HasFactory;

    protected $table ='asistencia';
    protected $prymaryKey ='id';
    protected $fillable = [
'idasistencia',
'fechaasistencia',
'horaasistencia',
'idaprendiz',
'idficha',
    ];
}
