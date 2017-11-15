<?php 
class Banco{
	public $cuentas;

	function _contruct(){

	$this->cuentas=[];
}

function buscar($cuenta)
		{
			$existe = array_search($cuenta , $this->cuentas);
			if((string)$existe =="0")
			{
				return true;
			}else{
				return false;
			}
		}



function agregar($cuenta){
	$this->cuentas[]=$cuenta;

}
}

 ?>