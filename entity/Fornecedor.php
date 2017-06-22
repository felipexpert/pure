<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 21/06/17
 * Time: 13:46
 */

namespace pure\model;


class Fornecedor {
  private $razaoSocial;
  private $nomeFantasia;
  private $tipo;
  private $cpfCnpj;
  private $IE;
  private $nascimentoAbertura;
  private $telefone1;
  private $telefone2;
  private $fax;
  private $email;
  private $website;
  private $endereco;
  private $numero;
  private $complemento;
  private $bairro;
  private $municipioCodigo;
  private $cep;
  private $observacao;
  private $cadastroData;
  private $disabled;

  /**
   * Fornecedor constructor.
   * @param $razaoSocial
   * @param $nomeFantasia
   * @param $tipo
   * @param $cpfCnpj
   * @param $ie
   * @param $nascimentoAbertura
   * @param $telefone1
   * @param $telefone2
   * @param $fax
   * @param $email
   * @param $website
   * @param $endereco
   * @param $numero
   * @param $complemento
   * @param $bairro
   * @param $municipioCodigo
   * @param $cep
   * @param $observacao
   * @param $cadastroData
   * @param $disabled
   */
  public function __construct($razaoSocial, $nomeFantasia, $tipo, $cpfCnpj, $ie, $nascimentoAbertura, $telefone1, $telefone2, $fax, $email, $website, $endereco, $numero, $complemento, $bairro, $municipioCodigo, $cep, $observacao, $cadastroData, $disabled) {
    $this->razaoSocial = $razaoSocial;
    $this->nomeFantasia = $nomeFantasia;
    $this->tipo = $tipo;
    $this->cpfCnpj = $cpfCnpj;
    $this->IE = $ie;
    $this->nascimentoAbertura = $nascimentoAbertura;
    $this->telefone1 = $telefone1;
    $this->telefone2 = $telefone2;
    $this->fax = $fax;
    $this->email = $email;
    $this->website = $website;
    $this->endereco = $endereco;
    $this->numero = $numero;
    $this->complemento = $complemento;
    $this->bairro = $bairro;
    $this->municipioCodigo = $municipioCodigo;
    $this->cep = $cep;
    $this->observacao = $observacao;
    $this->cadastroData = $cadastroData;
    $this->disabled = $disabled;
  }

  /**
   * @return mixed
   */
  public function getRazaoSocial() {
    return $this->razaoSocial;
  }

  /**
   * @return mixed
   */
  public function getNomeFantasia() {
    return $this->nomeFantasia;
  }

  /**
   * @return mixed
   */
  public function getTipo() {
    return $this->tipo;
  }

  /**
   * @return mixed
   */
  public function getCpfCnpj() {
    return $this->cpfCnpj;
  }

  /**
   * @return mixed
   */
  public function getIE() {
    return $this->IE;
  }

  /**
   * @return mixed
   */
  public function getNascimentoAbertura() {
    return $this->nascimentoAbertura;
  }

  /**
   * @return mixed
   */
  public function getTelefone1() {
    return $this->telefone1;
  }

  /**
   * @return mixed
   */
  public function getTelefone2() {
    return $this->telefone2;
  }

  /**
   * @return mixed
   */
  public function getFax() {
    return $this->fax;
  }

  /**
   * @return mixed
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * @return mixed
   */
  public function getWebsite() {
    return $this->website;
  }

  /**
   * @return mixed
   */
  public function getEndereco() {
    return $this->endereco;
  }

  /**
   * @return mixed
   */
  public function getNumero() {
    return $this->numero;
  }

  /**
   * @return mixed
   */
  public function getComplemento() {
    return $this->complemento;
  }

  /**
   * @return mixed
   */
  public function getBairro() {
    return $this->bairro;
  }

  /**
   * @return mixed
   */
  public function getMunicipioCodigo() {
    return $this->municipioCodigo;
  }

  /**
   * @return mixed
   */
  public function getCep() {
    return $this->cep;
  }

  /**
   * @return mixed
   */
  public function getObservacao() {
    return $this->observacao;
  }

  /**
   * @return mixed
   */
  public function getCadastroData() {
    return $this->cadastroData;
  }

  /**
   * @return mixed
   */
  public function getDisabled() {
    return $this->disabled;
  }

  public function fromArray($data) {
    foreach($data as $key => $value) $this->{$key} = $value;
  }

  public function toArray() {
    $result = [];
    $ref = new \ReflectionClass($this);
    $props = $ref->getProperties(\ReflectionProperty::IS_PRIVATE);
    forEach($props as $prop)
      $result[$prop] = $this->{$prop};
    return $result;
  }
}