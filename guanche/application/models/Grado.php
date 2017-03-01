<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Grado extends Eloquent {

	protected $table = 'grados';

	public $primaryKey = 'id_grado';

	public $timestamps = false;

	public function estudiante()
    {
        return $this->belongsTo('Estudiante','id_grado','id_grado');
    }
    public function recaudos()
    {
    	return $this->belongsToMany('Recaudo', 'Recaudo_Grado','id_grado','id_recaudo');
    }
    public function grado_escuela()
    {
        return $this->belongsTo('Grado_escuela','id_grado','id_grado');
    }
}

// $users = User::all();
