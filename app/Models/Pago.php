<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPago';

    protected $fillable = [
            'monto',
            'idMedioPago',
            'idVenta'
    ];

    public function ventas()
    {
        return $this->belongsTo(Venta::class, 'idVenta');
    }

    public function medioPagos()
    {
        return $this->belongsTo(MedioPago::class, 'idMedioPago');
    }
}
