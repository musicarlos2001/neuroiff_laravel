<?php

namespace neuroiff;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nome', 'prontuario'];
    
    //Regras para interagir dados
    static $rules = [
            'nome' =>'required|min:3|max:150',
            'prontuario'=>'required|numeric|unique:pacientes'
        ];
}
