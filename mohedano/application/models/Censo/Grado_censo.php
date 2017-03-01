<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;



class Grado_censo extends Eloquent {

	protected $table = 'censo_grados';


	public $primaryKey='id_censo_grado';

	public $timestamps = false;

}


