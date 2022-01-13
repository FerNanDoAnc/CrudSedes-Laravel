<?php

namespace App\Models\prueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    protected $table = 't_sedes';
    protected $primaryKey = 'codsede';
    public $incrementing = false;

    protected $fillable = [
            'codsede',
            'nomsede',
            'idsede',
            'estado',
    ];
}
