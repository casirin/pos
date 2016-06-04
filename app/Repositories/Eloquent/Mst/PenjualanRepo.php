<?php 

namespace App\Repositories\Eloquent\Mst;

use App\Models\Mst\Penjualan as Model;
use App\Repositories\Contracts\Mst\PenjualanRepoInterface;
use App\Repositories\Eloquent\defaultRepoTrait;

class PenjualanRepo implements PenjualanRepoInterface {
	
	// CRUD default
	use defaultRepoTrait;


	protected $model;

	public function __construct(Model $model){
		$this->model = $model;
	}
 



}