<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'idProducto';

    protected $fillable = [
            'nombre',
            'descripcion',
            'stockMinimo',
            'idCategoria'
    ];

    public $timestamps=false;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria');
    }

    public function lineaCompras()
    {
        return $this->hasMany(lineaCompra::class, 'idProducto');
    }

    public function lineaVentas()
    {
        return $this->hasMany(lineaVenta::class, 'idProducto');
    }
}
