<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProductsRepository::class)
 */
class Products
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(
     *      min = 1,
     *      max = 30,
     *      minMessage = "O peso precisa ter no mínimo 1 kg.",
     *      maxMessage = "O peso só pode ser no máximo 30 kg.",
     * )
     */
    private $weight;

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(
     *      min = 16,
     *      max = 105,
     *      minMessage = "O comprimento precisa ter no mínimo 16 cm.",
     *      maxMessage = "O comprimento só pode ser no máximo 105 cm.",
     * )
     */
    protected $length;

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(
     *      min = 2,
     *      max = 105,
     *      minMessage = "A altura precisa ter no mínimo 2 cm.",
     *      maxMessage = "A altura só pode ser no máximo 105 cm.",
     * )
     */
    private $height;

    /**
     * @ORM\Column(type="float")
     * @Assert\Range(
     *      min = 11,
     *      max = 105,
     *      minMessage = "A largura precisa ter no mínimo 11 cm.",
     *      maxMessage = "A largura só pode ser no máximo 105 cm.",
     * )
     */
    private $width;

    /**
     * Products constructor.
     * @param $name
     * @param $weight
     * @param $length
     * @param $height
     * @param $width
     */
    public function __construct($name, $weight, $length, $height, $width)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->length = $length;
        $this->height = $height;
        $this->width = $width;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(float $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }
}
