<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Post
{
    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private ?int $id;
    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private string $content;
    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private \DateTimeInterface $postedAt;
    /**
     * @ORM\ManyToOne(targetEntity="User"))
     */
    private User $author;

    /**
     * @ORM\ManyToMany(targetEntity="User")
     * @ORM\JoinTable(name="post_likes")
     */
    private array $likers;

    public function __construct()
    {
        $this->postedAt = new \DateTimeImmutable();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return \DateTimeImmutable|\DateTimeInterface
     */
    public function getPostedAt(): \DateTimeImmutable|\DateTimeInterface
    {
        return $this->postedAt;
    }

    /**
     * @param \DateTimeImmutable|\DateTimeInterface $postedAt
     */
    public function setPostedAt(\DateTimeImmutable|\DateTimeInterface $postedAt): void
    {
        $this->postedAt = $postedAt;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }

    /**
     * @return array
     */
    public function getLikers(): array
    {
        return $this->likers;
    }

    /**
     * @param array $likers
     */
    public function setLikers(array $likers): void
    {
        $this->likers = $likers;
    }


}