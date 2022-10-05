<?php

namespace App\Entity;

class Comment
{
    /**
     * @var int|null
     */
    private ?int $id;
    private string $message;
    private \DateTimeInterface $postedAt;
    private User $author;
    private Post $post;

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
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
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
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * @param Post $post
     */
    public function setPost(Post $post): void
    {
        $this->post = $post;
    }

}