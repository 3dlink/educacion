<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Usuario extends Eloquent {

	protected $table = 'usuarios';

	public $primaryKey='usuario';

	public $timestamps = false;

}