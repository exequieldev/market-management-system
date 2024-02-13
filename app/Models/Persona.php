<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPersona';

    protected $fillable = [
            'nombre',
            'apellido',
            'dni',
            'diraccion'
    ];

    public $timestamps=false;

    public function cuentas()
    {
        return $this->hasMany(Cuenta::class, 'idPersona');
    }
}
