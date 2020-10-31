<?php
/**
 * Created by PhpStorm.
 * User: geppetto
 * Date: 13/09/17
 * Time: 15:48
 */

namespace pure\model;


class ProdutoSt {
  private $produto;
  private $produtoFiscal;

  /**
   * ProdutoSt constructor.
   * @param $produto
   * @param $produtoFiscal
   */
  public function __construct($produto, $produtoFiscal) {
    $this->produto = $produto;
    $this->produtoFiscal = $produtoFiscal;
  }

  /**
   * @return mixed
   */
  public function getProduto() {
    return $this->produto;
  }

  /**
   * @return mixed
   */
  public function getProdutoFiscal() {
    return $this->produtoFiscal;
  }

}