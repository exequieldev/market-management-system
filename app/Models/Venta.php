<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $primaryKey = 'idVenta';

    protected $fillable = [
            'fecha',
            'estadoVenta'
    ];

    public function lineaVentas()
    {
        return $this->hasMany(lineaVenta::class, 'idVenta');
    }
}
