<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Recaudo_estudiante extends Eloquent {

	protected $table = 'recaudo_estudiante';

	public $primaryKey='id_recaudo_estudiante';

	public $timestamps = false;

}

// $users = User::all();
