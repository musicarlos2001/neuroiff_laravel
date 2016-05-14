<?php

namespace neuroiff\Http\Controllers;

use Illuminate\Http\Request;

use neuroiff\Http\Requests;
use neuroiff\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $paciente, $request;
    public function __construct(Paciente $paciente, Request $request)
    {
        $this->paciente = $paciente;
        $this->request = $request;
    }
    public function index()
    {   
        $pacientes = $this->paciente->paginate(5);
        $i = 1;

        return view('paciente.read', compact('pacientes','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create-update');
         //$pacientes = Paciente::get();
        //return redirect('paciente.read', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $dados = $this->request->all();

        $validator = validator($dados, Paciente::$rules);

        if($validator->fails()){
            return redirect('/paciente/create-update')
            ->withErrors($validator)
            ->withInput();
        }

        $insert = $this->paciente->create($dados);

        if($insert){
            return redirect('/paciente');
        }
        return redirect('/paciente/create-update');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
         $paciente = $this->paciente->find($id);
        return view('paciente.delete', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $paciente = $this->paciente->find($id);
        //dd($paciente);
        //return "Editar {$id}";
        return view('paciente.create-update', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {   
         $dados = $this->request->all();
         //regras especiais
         $rules = [
            'nome' =>'required|min:3|max:150',
            'prontuario'=>"required|numeric|unique:pacientes,prontuario,{$id}",
        ];

        $validator = validator($dados,$rules);

        if($validator->fails()){
            return redirect("/paciente/{$id}/create-update")
            ->withErrors($validator)
            ->withInput();
        }

        
        $paciente = $this->paciente->find($id);

        $update = $paciente->update($this->request->all());

        if($update){
            return redirect('/paciente');
        }
        return redirect('/paciente/{}/create-update')
                        ->withErrors('errors','Falha ao editar!');
        //return view('paciente.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = $this->paciente->find($id);
        $delete = $paciente->delete();
        if($delete){
            return redirect('/paciente');
        }
        return redirect("/paciente/$id");
        
    }
}
