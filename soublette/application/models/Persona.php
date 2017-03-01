<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Persona extends Eloquent {

	protected $table = 'personas';

	public $primaryKey='id_persona';

    public function estudiante()
    {
        return $this->belongsTo('Estudiante','id_persona','id_persona');
    }
    public function representante()
    {
        return $this->belongsTo('Representante','id_persona','id_persona');
    }
    public function telefono()
    {
        //return $this->hasOne('Phone', 'foreign_key', 'local_key');
        return $this->hasOne('Telefono', 'id_telefono', 'id_telefono_persona');
    }
}

// $users = User::all();
