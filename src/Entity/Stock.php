<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", indexes={@ORM\Index(name="IDX_4B365660498DA827", columns={"size_id"}), @ORM\Index(name="IDX_4B3656604584665A", columns={"product_id"})})
 * @ORM\Entity
 */
class Stock
{

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var \Product
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Size
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Size")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="size_id", referencedColumnName="id")
     * })
     */
    private $size;

    public function __construct($product, $size)
    {
        $this->product = $product;
        $this->size = $size;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getSize(): ?Size
    {
        return $this->size;
    }

    public function setSize(?Size $size): self
    {
        $this->size = $size;

        return $this;
    }


}
