<?php

namespace Hatimeria\Bundle\CMFBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

use Hatimeria\Bundle\CMFBundle\Entity\ContentNode;

/**
 * @ORM\Entity
 * @ORM\Table(name="cms_page")
 */
class CmsPage extends ContentNode
{
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="text")
     */
    protected $body;
    /**
     * @ORM\Column(length="255", name="meta_description")
     * 
     * @var string
     */
    protected $metaDescription;
    /**
     * @ORM\Column(length="255", name="meta_keywords")
     * 
     * @var string
     */
    protected $metaKeywords;
    /**
     * @ORM\Column(type="boolean", name="is_published")
     * 
     * @var boolean
     */
    protected $isPublished;
    /**
     * @ORM\ManyToOne(targetEntity="Hatimeria\Bundle\CMFBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    /**
     * @ORM\Column(length="255")
     *
     * @var string
     */
    protected $author;
    /**
     * @ORM\Column(type="datetime", name="publish_from", nullable=true)
     * @var \DateTime
     */
    protected $publishFrom;
    /**
     * @ORM\Column(type="datetime", name="publish_to", nullable=true)
     * @var \DateTime
     */
    protected $publishTo;

    public function __construct()
    {
        $this->author          = '';
        $this->body            = '';
        $this->metaDescription = '';
        $this->metaKeywords    = '';
        $this->author          = '';
        $this->isPublished     = false;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param string $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param string $metaKeywords
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getPublishFrom()
    {
        return $this->publishFrom;
    }

    public function setPublishFrom($publishFrom)
    {
        $this->publishFrom = $publishFrom;
    }

    /**
     * @return \DateTime
     */
    public function getPublishTo()
    {
        return $this->publishTo;
    }

    /**
     * @param \DateTime $publishTo
     */
    public function setPublishTo($publishTo)
    {
        $this->publishTo = $publishTo;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function publish()
    {
        $this->isPublished = true;
    }

    public function unpublish()
    {
        $this->isPublished = false;
    }

    public function setIsPublished($v)
    {
        $this->isPublished = (($v) ? true : false);
    }

    public function getIsPublished()
    {
        return $this->isPublished;
    }

    public function isPublished()
    {
        return $this->isPublished == true;
    }
}
 
