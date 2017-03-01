<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;


class Censo extends Eloquent {

	protected $table = 'censo';


	public $primaryKey='id_censo';

	public $timestamps = false;

}


