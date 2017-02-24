<?php

namespace pure\entity;

class Destinatario {
  private $fldId;
  private $destinatarioTipo;
  private $consumidorFinal;
  private $ieIsento;
  private $tipo;
  private $nome;
  private $nomeFantasia;
  private $rgIE;
  private $suframaInscricao;
  private $email;
  private $cpfCnpj;
  private $endereco;
  private $numero;
  private $complemento;
  private $bairro;
  private $municipioCodigo;
  private $cep;
  private $telefone;
  private $statusId;
  
  function __construct($fldId, $destinatarioTipo, $consumidorFinal, $ieIsento, $tipo, $nome, $nomeFantasia, $rgIE, $suframaInscricao, $email, $cpfCnpj, $endereco, $numero, $complemento, $bairro, $municipioCodigo, $cep, $telefone, $statusId) {
      $this->fldId = $fldId;
      $this->destinatarioTipo = $destinatarioTipo;
      $this->consumidorFinal = $consumidorFinal;
      $this->ieIsento = $ieIsento;
      $this->tipo = $tipo;
      $this->nome = $nome;
      $this->nomeFantasia = $nomeFantasia;
      $this->rgIE = $rgIE;
      $this->suframaInscricao = $suframaInscricao;
      $this->email = $email;
      $this->cpfCnpj = $cpfCnpj;
      $this->endereco = $endereco;
      $this->numero = $numero;
      $this->complemento = $complemento;
      $this->bairro = $bairro;
      $this->municipioCodigo = $municipioCodigo;
      $this->cep = $cep;
      $this->telefone = $telefone;
      $this->statusId = $statusId;
  }
  
  function getFldId() {
    return $this->fldId;
  }

  function getDestinatarioTipo() {
      return $this->destinatarioTipo;
  }

  function getConsumidorFinal() {
      return $this->consumidorFinal;
  }

  function getIeIsento() {
      return $this->ieIsento;
  }
  
  function getTipo() {
      return $this->tipo;
  }

  function getNome() {
      return $this->nome;
  }

  function getNomeFantasia() {
      return $this->nomeFantasia;
  }

  function getRgIE() {
      return $this->rgIE;
  }

  function getSuframaInscricao() {
      return $this->suframaInscricao;
  }

  function getEmail() {
      return $this->email;
  }

  function getCpfCnpj() {
      return $this->cpfCnpj;
  }

  function getEndereco() {
      return $this->endereco;
  }

  function getNumero() {
      return $this->numero;
  }

  function getComplemento() {
      return $this->complemento;
  }

  function getBairro() {
      return $this->bairro;
  }

  function getMunicipioCodigo() {
      return $this->municipioCodigo;
  }

  function getCep() {
      return $this->cep;
  }

  function getTelefone() {
      return $this->telefone;
  }

  function getStatusId() {
      return $this->statusId;
  }

  public function toArray() {
    return [
        'fldId' => $this->fldId
      , 'destinatarioTipo' => $this->destinatarioTipo
      , 'consumidorFinal' => $this->consumidorFinal
      , 'ieIsento' => $this->ieIsento
      , 'tipo' => $this->tipo
      , 'nome' => $this->nome
      , 'nomeFantasia' => $this->nomeFantasia
      , 'rgIE' => $this->rgIE
      , 'suframaInscricao' => $this->suframaInscricao
      , 'email' => $this->email
      , 'cpfCnpj' => $this->cpfCnpj
      , 'endereco' => $this->endereco
      , 'numero' => $this->numero
      , 'complemento' => $this->complemento
      , 'bairro' => $this->bairro
      , 'municipioCodigo' => $this->municipioCodigo
      , 'cep' => $this->cep
      , 'telefone' => $this->telefone
      , 'statusId' => $this->statusId
      ];
  }

  public function toJSON() {
    return json_encode($this->toArray());
  }

}
