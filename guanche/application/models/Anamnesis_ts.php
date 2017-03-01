<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Anamnesis_ts extends Eloquent {

	protected $table = 'anamnesis_ts';

	public $primaryKey='id_censo';

	public $timestamps = false;

}