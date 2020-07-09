<?php

namespace App\Entity;

use App\Repository\QuotationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuotationsRepository::class)
 */
class Quotations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $service_code;

    /**
     * @ORM\OneToOne(targetEntity=Orders::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $orders;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $portage_value;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deadline;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServiceCode(): ?string
    {
        return $this->service_code;
    }

    public function setServiceCode(string $service_code): self
    {
        $this->service_code = $service_code;

        return $this;
    }

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(Orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    public function getPortageValue(): ?string
    {
        return $this->portage_value;
    }

    public function setPortageValue(?string $portage_value): self
    {
        $this->portage_value = $portage_value;

        return $this;
    }

    public function getDeadline(): ?string
    {
        return $this->deadline;
    }

    public function setDeadline(?string $deadline): self
    {
        $this->deadline = $deadline;

        return $this;
    }
}
