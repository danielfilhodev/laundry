<?php
//USADO PARA DEBUGAR O CODIGO
//dd();

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
        $title = 'Listagem de Contratos';

        $prod = $this->produto->all();

        return view('painel.produtos.index', compact('prod', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastro de Produtos';
        $categorys = ['seguro'];

        return view('painel.produtos.create', compact('title','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return 'Cadastrando...';
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
        //INSERT VIA ARRAY
        
            $insert = $this->produto->create([
                'name'          => 'Roberto',
                'number'        => 55,
                'active'        => true,
                'category'      => 'seguro',
                'description'   => 'Tabela21',
                'image'         => 'xxx',
            ]);

            if ($insert) 
                return "cadastrado";
            else
                return "Err.";
        
            
        //UPDATE USANDO O METODO FIND (pesquisa pelo id)        
        /*
            $p = $this->produto->find(5);
            $update = $p->update([
                    'name'          => 'Asus ZenFone',
                    'number'        => 45654,
                    'active'        => true,
                    'category'      => 'eletronicos',
            ]);
        */

        //UPDATE USANDO O METODO WHERE (pesquisa por um campo da tabela)
        /*        
            $update = $this->produto->where('number', 123456)->update([
                                        'name'     => 'Asus ZenFone',
                                        'number'   => 99,
                                        'active'   => true,
                                        'category' => 'eletronicos',  
            ]);
        */

        //DELETE COM O METODO FIND (pesquisa pelo id)         
        /*
             $prod = $this->produto->find(3);
             $delete = $prod->delete();
        */

        //DELETE COM O METODO DESTROY (pode ser passados varios id's)
        /*
            $prod = $this->produto->destroy([3,5,6]);
        */

        //DELETE COM O METODO WHERE (procura e exclui por um campo da tabela)
            //$prod = $this->produto->where('number', 232565)->delete();

            //*** pode ser usado com mais condições
            //$prod = $this->produto->where('number', '>' , 99)->where('number', '<=' , 102)->delete();

            //*** pode ser usado com um operador
            //$prod = $this->produto->where('number','>=', 232565)->delete();

    }
}
