<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	//colunas que podem ser preenchidas pelo usuario
 	protected $fillable = [
					'name',
					'number',
					'active',
					'category',
					'description'
 	];

	//colunas que NÃO podem ser preenchidas pelo usuario
 	//protected $guarded = [];

}
