<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 13/09/17
 * Time: 14:04
 */

namespace pure\entity;


class ProdutoFiscal {
  private $produtoId;
  private $ncm;

  /**
   * ProdutoFiscal constructor.
   * @param $produtoId
   * @param $ncm
   */
  public function __construct($produtoId, $ncm) {
    $this->produtoId = $produtoId;
    $this->ncm = $ncm;
  }

  /**
   * @return mixed
   */
  public function getProdutoId() {
    return $this->produtoId;
  }

  /**
   * @return mixed
   */
  public function getNcm() {
    return $this->ncm;
  }
}