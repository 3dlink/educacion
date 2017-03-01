<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;


class Entrevista extends Eloquent {

	protected $table = 'entrevista_censo';


	public $primaryKey='id_entrevista';

	public $timestamps = false;

}


