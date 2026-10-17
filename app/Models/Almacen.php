<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;

    protected $table = 'almacenes';

    protected $fillable = [
        'nombre_almacen',
        'tamaño',
        'estado',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock_Almacen::class, 'almacen_id');
    }
}
