<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUsuario extends Model
{
    protected $table='usuario';
    protected $fillable=['name','id_user','email','endereco','cargo'];

    public function relUsers(){
        return $this->hasOne('App\User','id','id_user');
    }

}
