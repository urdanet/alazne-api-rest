<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'email',
        'fecha_hora_inicio',
        'estado',
        'status'
    ];

    protected $casts = [
        'fecha_hora_inicio' => 'datetime:Y-m-d H:i',
        'estado' => 'integer',
        'status' => 'integer'
    ];
    
    public $timestamps = false;
} 