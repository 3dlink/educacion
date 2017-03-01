<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Docente extends Eloquent {

	protected $table = 'teacher';

	public $primaryKey='teacher_id';

	public $timestamps = false;

}

