<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comanda;

class ComandaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('comandas.listar', ['comandas' => Comanda::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //retorno uma view para registrar dados de nova comanda...
        return view('comandas.nova');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $numero = 0;
        $status = 'aberta';
        $mesa = $request->input('mesa');
        $created_at = \Carbon\Carbon::now()->format('Y-m-d H:i:s');

        $comanda = new Comanda;
        $comanda->status = $status;
        $comanda->mesa = $mesa;
        $comanda->created_at = $created_at;

        if ($comanda->save()):
            $numero = $comanda->getKey();
        endif;

        if ($comanda !== 0):
            return redirect()->to(route('editar.comanda', ['comanda_id' => $numero]));
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $consumo = \App\Comanda::find($id)
                ->consumo()
                ->join('produto', 'produto_id', 'consumo.produto_id')
                ->get();

        return view('comandas.consumo', compact('consumo'))->with(['comanda_id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //Editar itens da comanda
        return view('comandas.editar', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function close($id, $valor = 0) {
        return view('comandas.fechar')->with(['id' => $id, 'valor' => $valor]);
    }

    public function registrar(Request $request) {
    
        return redirect()->to(route('fechar.comanda',['id'=>$request->input('comanda_id'),'valor'=>$request->input('total') ]));
    }

}
