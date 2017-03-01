<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Representante extends Eloquent {

	protected $table = 'representantes';

	public $primaryKey='id_representante';

    public function persona()
    {
        return $this->hasOne('Persona','id_persona','id_persona');
    }

}

// $users = User::all();
