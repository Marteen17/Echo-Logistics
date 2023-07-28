<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregado extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa',
        'tiempo_estimado',
        'inicio',
        'final',
        'vehiculo_id',
        'placa'
    ];
    

public function vehiculos()
{
    return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
}

  

}
