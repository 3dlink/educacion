<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Recaudo extends Eloquent {

	protected $table = 'recaudos';

	public $primaryKey='id_recaudo';

	public $timestamps = false;

	public function grados()
    {
        return $this->belongsToMany('Grado','Recaudo_Grado','id_recaudo','id_grado');
    }

}

// $users = User::all();
