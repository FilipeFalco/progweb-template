<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'primeiro_nome',
        'segundo_nome',
        'endereco',
        'email',
        'telefone',
    ];
    //
}
