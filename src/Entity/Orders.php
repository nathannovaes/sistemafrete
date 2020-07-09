<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cep_origin;

    /**
     * @ORM\Column(type="integer")
     */
    private $cep_destiny;

    /**
     * @ORM\OneToOne(targetEntity=Products::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $products;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCepOrigin(): ?string
    {
        return $this->cep_origin;
    }

    public function setCepOrigin(string $cep_origin): self
    {
        $this->cep_origin = $cep_origin;

        return $this;
    }

    public function getCepDestiny(): ?string
    {
        return $this->cep_destiny;
    }

    public function setCepDestiny(string $cep_destiny): self
    {
        $this->cep_destiny = $cep_destiny;

        return $this;
    }

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(Products $products): self
    {
        $this->products = $products;

        return $this;
    }
}
