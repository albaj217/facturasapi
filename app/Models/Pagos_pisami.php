<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos_pisami extends Model
{
    protected $fillable =['codigo_asobancaria','forma_pago','codigo_barra','numero_cuenta','numero_recibo','valor_pagado','fecha_pago','codigo_aceptacion','codigo_transaccion'];


   // use HasFactory;
}
