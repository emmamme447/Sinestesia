<?php

namespace App\Entity;

use App\Repository\AutoresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AutoresRepository::class)]
class Autores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $cumpleaños = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nacionalidad = null;



    #[ORM\OneToMany(targetEntity: Libros::class, mappedBy: 'autores')]
    private $libros;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCumpleaños(): ?\DateTimeInterface
    {
        return $this->cumpleaños;
    }

    public function setCumpleaños(\DateTimeInterface $cumpleaños): self
    {
        $this->cumpleaños = $cumpleaños;

        return $this;
    }

    public function getNacionalidad(): ?string
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(?string $nacionalidad): self
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }
}
