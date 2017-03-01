<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Grado_escuela extends Eloquent {

	protected $table = 'grado_escuela';

	public $primaryKey = 'id_grado_escuela';

	public $timestamps = false;

	public function grado()
    {
        return $this->belongsToMany('Grados','id_grado','id_grado');
    }
}