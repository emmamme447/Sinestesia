<?php

namespace App\Entity;

use App\Repository\ReviewsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewsRepository::class)]
class Reviews
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1000)]
    private ?string $comentarios = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fecha_comentario = null;

    #[ORM\Column]
    private ?int $puntuacion = null;


    #[ORM\ManyToOne(targetEntity: Usuarios::class, inversedBy: 'reviews')]
    private $usuarios;









    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComentarios(): ?string
    {
        return $this->comentarios;
    }

    public function setComentarios(string $comentarios): self
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    public function getFechaComentario(): ?\DateTimeInterface
    {
        return $this->fecha_comentario;
    }

    public function setFechaComentario(\DateTimeInterface $fecha_comentario): self
    {
        $this->fecha_comentario = $fecha_comentario;

        return $this;
    }

    public function getPuntuacion(): ?int
    {
        return $this->puntuacion;
    }

    public function setPuntuacion(int $puntuacion): self
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }
}
