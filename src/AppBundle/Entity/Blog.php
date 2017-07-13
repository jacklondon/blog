<?php
/**
 * Created by PhpStorm.
 * User: JackLondon
 * Date: 10.07.2017
 * Time: 14:39
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;
Use AppBundle\Entity\User;
/**
 * Class Blog
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="BlogRepository")
 * @ORM\Table(name="blog")
 */
class Blog
{
    /**
     * @var integer $id
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $title
     * @ORM\Column(name="title", type="string",nullable=false)
     * @Assert\Length(min = "3", minMessage = "Başlık en az 3 karakter olmalı")
     */
    protected $title;
    /**
     * @var text $content
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    protected $content;

    /**
     * @var datetime $createdAt
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    protected $createdAt;

    /**
     * @var integer $userid
     * @ORM\Column(name="user_id", type="integer")
     */
    protected $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="slug_link", type="string")
     */
    protected $slug;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
   private $users;

    /**
     * Get id
     *
     * @return integer
     */


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
     * @return Blog
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
     * @return Blog
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Blog
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Blog
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Blog
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set users
     *
     * @param \AppBundle\Entity\User $users
     * @return Blog
     */
    public function setUsers(\AppBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
