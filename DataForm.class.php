<?php

/**
*  Class DataForm();
*  Autor: Adriano dos Santos
*  E-mail: santosbio@gmail.com
*
*  Converte o formato TIMESTAMP (yyyy-mm-dd hh:ii:ss) para o padrão brasileiro.
*
*  get_data() => retorna a data com o ano abreviado. Ex.: 99/99/99
*  get_data_full() => retorna a data com o ano completo. Ex.: 99/99/9999
*  get_hora() => retorna a hora, no fomrato hh:ii:ss.
*
*/

class DataForm
{
	private $dI;
	private $tmp;
	private $d;
	private $h;
	private $s;

	function __construct()
	{

	}

	public function set_data($dI){
		$tmp = explode(' ', $dI);
		$h = $tmp[1];
		$d = explode('-', $tmp[0]);
		$s = substr($d[0], 2, 2);
		$s = $d[2] . '/' . $d[1] . '/' . $s;
		$d = $d[2] . '/' . $d[1] . '/' . $d[0];
		$tmp = $d . ' ' . $h;

		$this->data = $s;
		$this->dataFull = $d;
		$this->hora = $h;
	}

	public function get_data(){
		echo $this->data;
	}

	public function get_data_full(){
		echo $this->dataFull;
	}

	public function get_hora(){
		echo $this->data;
	}

	
}

?>