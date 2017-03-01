<?php

use \Illuminate\Database\Eloquent\Model as Eloquent;

class Escuela extends Eloquent {

	protected $table = 'escuelas';

	public $primaryKey = 'id_escuela';

	public $timestamps = false;

    public function director()
    {
        return $this->hasOne('Docente','teacher_id','id_persona_director');
    }
    public function subdirector_inicial()
    {
        return $this->hasOne('Persona','id_persona','id_persona_subdirector_inicial');
    }
    public function subdirector_basica()
    {
        return $this->hasOne('Persona','id_persona','id_persona_subdirector_basica');
    }
    public function subdirector_media()
    {
        return $this->hasOne('Persona','id_persona','id_persona_subdirector_media');
    }
    public function direccion()
    {
        return $this->hasOne('Direccion','id_direccion','id_direccion_escuela');
    }

}

// $users = User::all();
