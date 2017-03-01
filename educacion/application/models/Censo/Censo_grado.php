<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;



class Censo_grado extends Eloquent {

	protected $table = 'censo_grados';


	public $primaryKey='id_censo_grado';

	public $timestamps = false;

    // public function getTableColumns() {
    //     return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    // }
}


