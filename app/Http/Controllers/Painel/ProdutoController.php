<?php
//USADO PARA DEBUGAR O CODIGO
//dd();

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;
use App\Http\Requests\Painel\ProdutoFormRequest;

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
/*
        foreach ($prod1 as $p) {

            $prod['name'] = $p['name'];
            $prod['number'] = $p['number'];
            $prod['active'] = ( $p['active'] == 1 ) ? 'Ativo' : 'Inativo';
            $prod['category'] = $p['category'];
            $prod['description'] = $p['description'];

        }
        //dd($prod);
*/
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

        return view('painel.produtos.create-edit', compact('title','categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoFormRequest $request)
    {
        //recupera todos os dados vindo do form
        //dd($request->all());
        
        //recupera campos especificos
        //dd($request->only(['name', 'number']));
        
        //recupera todos os campos excluindo os que forem solicitados
        //dd($request->except(['name']));

        //recupera um campo especifico
        //dd($request->input(['name']));


        $dataForm = $request->except('_token');
        $dataForm['active'] = ( !isset($dataForm['active']) or $dataForm['active'] == null ) ? 0 : 1;

        //validação dos dados
        //$this->validate($request, $this->produto->rules);
/*
        $validate = validator($dataForm, $this->produto->rules);
        if($validate->fails()){
            return redirect()
                    ->route('produtos.create')
                    ->withErrors($validate)
                    ->withInput();
        }
*/
        $insert = $this->produto->create($dataForm);

        if ($insert) 
            
            return redirect()->route('produtos.index');
        else
            return redirect()->back();
            return redirect()->route('produtos.create-edit');
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
        $produto = $this->produto->find($id);

        $title = "'Editar Produto: {$produto->name}'";
        $categorys = ['seguro'];

        return view('painel.produtos.create-edit', compact('title','categorys', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoFormRequest $request, $id)
    {
        $dataForm = $request->all();

        $produto = $this->produto->find($id);

        $dataForm['active'] = ( !isset($dataForm['active']) or $dataForm['active'] == null ) ? 0 : 1;

        $update = $produto->update($dataForm);

        if($update)
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.edit', $id)->with(['errors' => 'Falha ao editar']);
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
