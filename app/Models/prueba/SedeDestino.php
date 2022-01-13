<?php

namespace App\Models\prueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SedeDestino extends Model
{
    use HasFactory;

    protected $table = 'sede_destinos';
    protected $primaryKey = 'idsede';
    public $incrementing = false;
    protected $casts = [
        'idsede' => 'string',
    ];
    protected $keyType = 'string';

    protected $fillable = [
        'idsede',
        'ubigeo',
        'usuariocrea',

        'usuariomod',

        'estado',
        'observacion',
    ];
}
