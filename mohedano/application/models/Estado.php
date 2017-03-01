<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Estado extends Eloquent {

	protected $table = 'estados';


	public $primaryKey='id_estado';

	public $timestamps = false;

	public function direccion()
    {
        return $this->belongsTo('Direccion','id_estado','id_estado');
    }

}

// $users = User::all();
