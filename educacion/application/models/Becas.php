<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Becas extends Eloquent {

	protected $table = 'becas';

	public $primaryKey = 'id_beca';

	public $timestamps = false;

}

// $users = User::all();
