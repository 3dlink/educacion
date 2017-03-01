<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Direccion extends Eloquent {

	protected $table = 'direcciones';

	public $primaryKey='id_direccion';

	public $timestamps = false;

	public function estado()
    {
        //return $this->hasOne('Phone', 'foreign_key', 'local_key');
        return $this->hasOne('Estado', 'id_estado', 'id_estado');
    }

    public function municipio()
    {
        return $this->hasOne('Municipio','id_municipio','id_municipio');
    }

    public function parroquia()
    {
        return $this->hasOne('Parroquia','id_parroquia','id_parroquia');
    }

}

// $users = User::all();
