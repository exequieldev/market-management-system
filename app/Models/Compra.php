<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCompra';

    protected $fillable = [
        'fecha',
        'idProveedor'
    ];

    public function proveedores()
    {
        return $this->belongsTo(Proveedor::class, 'idProveedor');
    }
    public function lineaCompras()
    {
        return $this->hasMany(Compra::class, 'idCompra');
    }
}
