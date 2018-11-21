<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;

class ProdutoController extends Controller
{

    private $produto;

    public function __construct(Produto $produto)
    {

        $this->produto = $produto;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $prod = $this->produto->all();

        return view('painel.produtos.index', compact('prod'));
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


    public function teste ()
    {
/*
        $insert = $this->produto->create([
            'name'          => 'Iphone X',
            'number'        => 52568,
            'active'        => true,
            'category'      => 'eletronicos',
            'description'   => 'Celular 128Gb Ram',
            'image'         => 'Celular 128Gb Ram',
        ]);
        
        if($insert)
            return "Produto cadastrado com sucesso! ID: {$insert->id}";
        else
            return "Não foi possivel cadastrar o produto!";
*/
    //dd($p);
    //FAZENDO UPDATE USANDO O METODO FIND (pesquisa pelo id)        
    /*
    $p = $this->produto->find(5);
    $update = $p->update([
            'name'          => 'Asus ZenFone',
            'number'        => 45654,
            'active'        => true,
            'category'      => 'eletronicos',
    ]);

        if($update)
            return "Produto Alterado com sucesso!";
        else
            return "Não foi possivel Alterar o produto!";

    */
    $update = $this->produto->where('number', 123456)->update([
                                'name'     => 'Asus ZenFone',
                                'number'   => 99,
                                'active'   => true,
                                'category' => 'eletronicos',  
    ]);
            if($update)
            return "Produto Alterado com sucesso! 2";
        else
            return "Não foi possivel Alterar o produto!";
    }
}
