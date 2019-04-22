<?php

declare(strict_types=1);

namespace AppBundle\Model;

class Change
{
    /**
     * @var int
     */
    public $bill10 = 0;

    /**
     * @var int
     */
    public $bill5 = 0;

    /**
     * @var int
     */
    public $coin2 = 0;

    /**
     * @var int
     */
    public $coin1 = 0;

    /**
     * @return int
     */
    public function getBill10(): int
    {
        return $this->bill10;
    }

    /**
     * @param int $bill10
     */
    public function setBill10(int $bill10): void
    {
        $this->bill10 = $bill10;
    }

    /**
     * @return int
     */
    public function getBill5(): int
    {
        return $this->bill5;
    }

    /**
     * @param int $bill5
     */
    public function setBill5(int $bill5): void
    {
        $this->bill5 = $bill5;
    }

    /**
     * @return int
     */
    public function getCoin2(): int
    {
        return $this->coin2;
    }

    /**
     * @param int $coin2
     */
    public function setCoin2(int $coin2): void
    {
        $this->coin2 = $coin2;
    }

    /**
     * @return int
     */
    public function getCoin1(): int
    {
        return $this->coin1;
    }

    /**
     * @param int $coin1
     */
    public function setCoin1(int $coin1): void
    {
        $this->coin1 = $coin1;
    }


}
