<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jornada extends Model
{
    use HasFactory;

    protected $table ='jornada';
    protected $prymaryKey ='id';
    protected $fillable = [
'idjornada',
'tipojornada',

    ];
}
