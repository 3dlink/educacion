<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;



class Cupo extends Eloquent {

    protected $table = 'cupos';

    public $primaryKey='id_cupo';

    public $timestamps = false;

}


