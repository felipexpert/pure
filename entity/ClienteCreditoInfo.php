<?php

namespace pure\entity;

class ClienteCreditoInfo {
     private $limite;
     private $aDever;
     private $atrasado;

	public function __construct($limite, $aDever, $atrasado) {
	  $this->limite = $limite;
	  $this->aDever = $aDever;
          $this->atrasado = $atrasado;
	}

	public function getLimite() {
	  return $this->limite;
	}

	public function getADever() {
          return $this->aDever;
	}
	public function getAtrasado() {
          return $this->atrasado;
	}

	public function toArray() {
		return [ 'limite' => $this->limite
		       , 'aDever' => $this->aDever
                       , 'atrasado' => $this->atrasado ];
	}

	public function toJSON() {
		return json_encode($this->toArray());
	}
}
