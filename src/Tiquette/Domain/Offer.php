<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 2/1/18
 * Time: 1:12 AM
 */

namespace Tiquette\Domain;


class Offer
{
    private $proposition;
    private $price;
    /**
     * Offer constructor.
     * @param $proposition
     * @param $price
     */
    public function __construct($proposition, $price)
    {
        $this->proposition = $proposition;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getProposition()
    {
        return $this->proposition;
    }

    /**
     * @param mixed $proposition
     */
    public function setProposition($proposition): void
    {
        $this->proposition = $proposition;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }



}