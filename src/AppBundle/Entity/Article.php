<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Article
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ArticleRepository")
 * @ORM\Table(name="article")
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     *
     */
    private $category;

    /**
     * @var Tag
     *
     * @ORM\ManyToMany(targetEntity="Tag")
     */
    private $tag;



    public function  __construct()
    {
        $this->tag = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Add types
     *
     * @param Tag $tag
     * @return Tag
     */
    public function addTag(Tag $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Remove Tags
     *
     * @param Tag $tag
     *
     */
    public function removeTag(Tag $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     * @return Category
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->title;

    }
}
