<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table = 'facturas';

    protected $fillable = [
        'id_cliente',
        'fecha',
        'num_pago'
    ];


    protected $hidden= ['created_at','updated_at'];
}
