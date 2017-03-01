<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Telefono extends Eloquent {

	protected $table = 'telefonos';

	public $primaryKey = 'id_telefono';

	public $timestamps = false;

	public function estudiante()
    {
        //return $this->belongsTo('Estudiante','id_grado');
        //return $this->belongsTo('User', 'local_key', 'parent_key');
        return $this->belongsTo('Persona','id_telefono','id_telefono_persona');

    }

}

// $users = User::all();
