<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 16/06/17
 * Time: 10:08
 */

namespace pure\model;


class CompraNovo {
  private $tipoId;
  private $fornecedorId;
  private $nota;
  private $notaChave;
  private $status;
  private $usuarioId;
  private $desconto;
  private $descontoReais;
  private $observacao;
  private $transporte;
  private $ipiValor;
  private $stValor;
  private $faturado;
  private $marcador;
  private $items;

  /**
   * @return mixed
   */
  public function getTipoId() {
    return $this->tipoId;
  }

  /**
   * @return mixed
   */
  public function getFornecedorId() {
    return $this->fornecedorId;
  }

  /**
   * @return mixed
   */
  public function getNota() {
    return $this->nota;
  }

  /**
   * @return mixed
   */
  public function getNotaChave() {
    return $this->notaChave;
  }

  /**
   * @return mixed
   */
  public function getStatus() {
    return $this->status;
  }

  /**
   * @return mixed
   */
  public function getUsuarioId() {
    return $this->usuarioId;
  }

  /**
   * @return mixed
   */
  public function getDesconto() {
    return $this->desconto;
  }

  /**
   * @return mixed
   */
  public function getDescontoReais() {
    return $this->descontoReais;
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
  public function getTransporte() {
    return $this->transporte;
  }

  /**
   * @return mixed
   */
  public function getIpiValor() {
    return $this->ipiValor;
  }

  /**
   * @return mixed
   */
  public function getStValor() {
    return $this->stValor;
  }

  /**
   * @return mixed
   */
  public function getFaturado() {
    return $this->faturado;
  }

  /**
   * @return mixed
   */
  public function getMarcador() {
    return $this->marcador;
  }

  /**
   * @return mixed
   */
  public function getItems() {
    return $this->items;
  }

  public function fromArray($data) {
    foreach ($data as $key => $value) {
      if($key == 'items') {
        $this->items = [];
        forEach ($value as $item) {
          $i = new CompraItemNovo();
          $i->fromArray($item);
          $this->items[] = $i;
        }
      } else {
        $this->{$key} = $value;
      }
    }
  }
}