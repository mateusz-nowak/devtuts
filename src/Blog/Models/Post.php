<?php

namespace Blog\Models;

class Post
{
    protected $id;
    protected $category;
    protected $tags;
    protected $title;
    protected $description;
    protected $body;
    protected $createdAt;
    protected $updatedAt;
    protected $user;

    public function __construct($title, $description, $body, User $user, Category $category, array $tags)
    {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setBody($body);
        $this->setUser($user);
        $this->setCategory($category);

        foreach ($tags as $tag) {
            $this->addTag($tag);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function addTag(Tag $tag)
    {
        $this->tag = $tag;
    }
}
