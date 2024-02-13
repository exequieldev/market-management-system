<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCuenta';

    protected $fillable = [
            'fecha',
            'idVenta',
            'idPersona'];

    public function ventas()
    {
        return $this->belongsTo(Venta::class, 'idVenta');
    }

    public function personas()
    {
        return $this->belongsTo(Persona::class, 'idPersona');
    }
}
