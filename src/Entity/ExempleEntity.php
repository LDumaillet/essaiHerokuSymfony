<?php

namespace App\Entity;

use App\Repository\ExempleEntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ExempleEntityRepository::class)]
class ExempleEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotCompromisedPassword]
    #[Assert\Length(min: 8, message: 'Mot de passe trop court')]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 3, message: 'Nom utilisateur trop court')]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email(message: 'Email invalide')]
    private ?string $email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
}
