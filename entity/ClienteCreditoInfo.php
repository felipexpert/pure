<?php

namespace pure\entity;

class ClienteCreditoInfo {
     private $limite;
     private $aDever;

	public function __construct($limite, $aDever) {
	  $this->limite = $limite;
	  $this->aDever = $aDever;
	}

	public function getLimite() {
	  return $this->limite;
	}

	public function getADever() {
      return $this->aDever;
	}

	public function toArray() {
		return [ 'limite' => $this->limite
		       , 'aDever' => $this->aDever ];
	}

	public function toJSON() {
		return json_encode($this->toArray());
	}
}