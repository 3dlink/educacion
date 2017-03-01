<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Escuela_nivel_educativo extends Eloquent {

	protected $table = 'escuela_nivel_educativo';

	public $primaryKey = 'id_nivel_educativo';

	public $timestamps = false;
}
