<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedioPago extends Model
{
    use HasFactory;

    protected $primaryKey = 'idMedioPago';

    protected $fillable = [
            'nombre',
            'descripcion'
    ];

    public $timestamps=false;

    public function pago()
    {
        return $this->hasMany(Pago::class, 'idPago');
    }
}
