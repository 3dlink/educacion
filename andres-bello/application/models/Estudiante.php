<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Estudiante extends Eloquent {

	protected $table = 'estudiantes';

	public $primaryKey='id_estudiante';

	public $timestamps = false;

    public function persona()
    {
        return $this->hasOne('Persona','id_persona','id_persona');
    }

     public function escuela()
    {
        return $this->hasOne('Escuela','id_escuela','id_escuela');
    }

    public function grado()
    {
        return $this->hasOne('Grado','id_grado','id_grado');
    }

    public function seccion()
    {
        return $this->hasOne('Seccion','id_seccion','id_seccion');
    }

}

// $users = User::all();
