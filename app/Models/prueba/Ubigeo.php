<?php

namespace App\Models\prueba;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    use HasFactory;

    protected $table = 'ubigeos';
    protected $primaryKey = 'ubigeo';
    public $incrementing = false;
    protected $casts = [
        'ubigeo' => 'string',
    ];
    protected $keyType = 'string';

    protected $fillable = [
            'ubigeo',
            'coddepa',
            'codprov',
            'codpos',
            'departamento',
            'provincia',
            'distrito', 
            'nombre',
            'flagprov',
            'codpostal',
            'codzona',
            'tipo_zona',
            'tipo_ofi', 
            'estado_ubigeo',
            'tipo_zona_sunat',  
            'forma_envio',
            'bloq_rural',
            'tipo_veri_camp_sunat',
            'tp_region',
            'tipo_zona_client',
            'tipo_zona_client_sbs',
            'tipo_zona_client_atu',
            'lead',

    ];
}
