<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Seccion extends Eloquent {

	protected $table = 'secciones';

	public $primaryKey = 'id_seccion';

	public $timestamps = false;

	//Cada estudiante tiene un seccion
    public function alumno()
    {
        //return $this->belongsTo('Estudiante','id_seccion');
        return $this->belongsToMany('Estudiante','id_seccion');
    }

}

// $users = User::all();
