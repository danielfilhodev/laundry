<?php

use Illuminate\Database\Seeder;
use App\Models\Painel\Produto;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
        	'name' => 'Seguro de Vida Individual',
        	'number' => '21212',
        	'active' => true,
        	'category' => 'seguro',
        	'description' => 'Atende até 65 Anos'
        ]);
    }
}
