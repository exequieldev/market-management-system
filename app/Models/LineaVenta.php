<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaVenta extends Model
{
    use HasFactory;

    protected $primaryKey = 'idVenta';

    protected $fillable = [
            'cantidad',
            'monto',
            'idProducto',
            'idVenta'
    ];

    public function ventas()
    {
        return $this->belongsTo(Venta::class, 'idVenta');
    }

    public function productos()
    {
        return $this->belongsTo(Producto::class, 'idProducto');
    }
}
