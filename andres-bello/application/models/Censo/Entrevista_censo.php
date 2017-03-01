<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Entrevista_censo extends Eloquent {

	protected $table = 'entrevista_censo';

	public $primaryKey='id_entrevista';

	public $timestamps = false;

}