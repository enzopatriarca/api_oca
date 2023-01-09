<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;
use App\Models\Produtos_Pedidos;
use App\Models\Pedidos;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Produto::all(); 
    }

    public function filtrarPorId($id){
        $Produtos = DB::table('produtos')->where('categorias', $id)->get();;
        return $Produtos;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $Produto = DB::table('produtos')->where('id', $id)->get();
        return $Produto;
    }

    public function registar(Request $request){

        //return  $request;
        $carrinho = $request->carrinho;
        //return $carrinho;
        $user = $request->user;
        $total = $request->total;
        $pedido =  new Pedidos;
        $pro = new Produto;
        $pro = $carrinho[0];
        // $table->foreignId('user')->constrained()->cascadeOnDelete();
        // $table->string('status')->default('Aguardando');
        // $table->integer('preco_total');
        
        // $pedido->user = $user;
        // $pedido->preco_total = $total;
        // $pedido->status = 'Aguardando';
        // //return  $pedido;
        // $pedido->save();
        // return  $request;
        
        // return $pedido;
        // $pedido_= Pedidos::find($pedido->id);
        // $table->foreignId('pedidos')->constrained()->cascadeOnDelete();
        // $table->integer('idproduto');
        //$table->string('nomeproduto');
        // $table->integer('qtd_produtos');
        $k = 0;
        // return count($carrinho);
        for ($i=0; $i < count($carrinho); $i++) {
            $produto_ped = new Produtos_Pedidos; 
            $produto_ped->pedidos = 1;
            $produto_ped->idproduto = $carrinho[$k];
            $produto_ped->nomeproduto = $carrinho[$k+1];
            $produto_ped->qtd_produto = $carrinho[$k+2];
            //$k = $k + 2;
            //$i = $k;
            //$produto_ped->save();
        }
        return $produto_ped;
    }   


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
