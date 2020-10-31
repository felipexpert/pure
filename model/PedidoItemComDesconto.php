<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 18/09/2017
 * Time: 16:36
 */

namespace pure\model;


class PedidoItemComDesconto
{
    private $id;
    private $valor;
    private $desconto;

    /**
     * PedidoItemComDesconto constructor.
     * @param $valor
     * @param $desconto
     */
    public function __construct($id, $valor, $desconto)
    {
        $this->id = $id;
        $this->valor = $valor;
        $this->desconto = $desconto;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @return mixed
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    public function __toString()
    {
        return "{id={$this->id}valor={$this->valor},desconto={$this->desconto}";
    }


}