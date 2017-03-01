<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Perfiles extends Eloquent {

	protected $table = 'proyecto_primaria';
    
    public $primaryKey='id_persona';

}

// $users = User::all();