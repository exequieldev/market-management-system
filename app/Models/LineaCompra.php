<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineaCompra extends Model
{
    use HasFactory;

    protected $primaryKey = 'idLineaCompra';

    protected $fillable = [
            'cantidad',
            'precioUnitario',
            'idProducto',
            'idCompra'
    ];

    public function compras()
    {
        return $this->belongsTo(Compra::class, 'idCompra');
    }

    public function productos()
    {
        return $this->belongsTo(Producto::class, 'idProducto');
    }
}
