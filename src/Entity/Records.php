<?php

namespace App\Entity;

use App\Repository\RecordsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecordsRepository::class)]
class Records
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $user_name_record = null;

    #[ORM\Column(length: 255)]
    private ?string $email_record = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $home_page_record = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_path = null;

    #[ORM\Column(nullable: true)]
    private ?int $moderation = null;

    #[ORM\Column(length: 255)]
    private ?string $created = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $updated = null;

    #[ORM\ManyToOne(inversedBy: 'records')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserNameRecord(): ?string
    {
        return $this->user_name_record;
    }

    public function setUserNameRecord(string $user_name_record): static
    {
        $this->user_name_record = $user_name_record;

        return $this;
    }

    public function getEmailRecord(): ?string
    {
        return $this->email_record;
    }

    public function setEmailRecord(string $email_record): static
    {
        $this->email_record = $email_record;

        return $this;
    }

    public function getHomePageRecord(): ?string
    {
        return $this->home_page_record;
    }

    public function setHomePageRecord(?string $home_page_record): static
    {
        $this->home_page_record = $home_page_record;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->image_path;
    }

    public function setImagePath(?string $image_path): static
    {
        $this->image_path = $image_path;

        return $this;
    }

    public function getModeration(): ?int
    {
        return $this->moderation;
    }

    public function setModeration(?int $moderation): static
    {
        $this->moderation = $moderation;

        return $this;
    }

    public function getCreated(): ?string
    {
        return $this->created;
    }

    public function setCreated(string $created): static
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    public function setUpdated(?string $updated): static
    {
        $this->updated = $updated;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

}
