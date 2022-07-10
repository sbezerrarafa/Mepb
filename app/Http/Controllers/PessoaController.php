<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;

class PessoaController extends Controller
{
    private string $bladePath = 'home';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function membro()
    {
        $membros = Pessoa::filterAniversariante();
        return view('pessoas.membros', compact('membros'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visitante()
    {
        $visitantes = Pessoa::filterVisitante();
        return view('pessoas.visitantes', compact('visitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.criar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaRequest $request)
    {
        Pessoa::create($request->validated());

        return $this->redirectStoreSuccess($this->bladePath);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoa::find($id);

        if (!$pessoa) {
            return $this->redirectNotFound($this->bladePath);
        }

        return view('pessoas.editar', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PessoaRequest $request, $id)
    {
        $pessoa = Pessoa::find($id);

        if (!$pessoa) {
            return $this->redirectNotFound($this->bladePath);
        }

        $pessoa->update($request->validated());

        return $this->redirectUpdatedSuccess($this->bladePath);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);

        if (!$pessoa) {
            return $this->redirectNotFound($this->bladePath);
        }

        $pessoa->delete();

        return $this->redirectRemovedSuccess($this->bladePath);
    }
}
