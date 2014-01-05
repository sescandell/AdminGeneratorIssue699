<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Poll
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\PollRepository")
 */
class Poll
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\OneToMany(targetEntity="Acme\DemoBundle\Entity\PollQuestion", mappedBy="poll",  cascade={"remove"})
     *
     */
    private $pollQuestion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     *
     */
    public function __construct()
    {
        $this->pollQuestion = new ArrayCollection();
        $this->created = new \DateTime();
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
     * @return Poll
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
     * Set isActive
     *
     * @param boolean $isActive
     * @return Poll
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add pollQuestion
     *
     * @param \Acme\DemoBundle\Entity\PollQuestion $pollQuestion
     * @return Poll
     */
    public function addPollQuestion(\Acme\DemoBundle\Entity\PollQuestion $pollQuestion)
    {
        $this->pollQuestion[] = $pollQuestion;

        return $this;
    }

    /**
     * Remove pollQuestion
     *
     * @param \Acme\DemoBundle\Entity\PollQuestion $pollQuestion
     */
    public function removePollQuestion(\Acme\DemoBundle\Entity\PollQuestion $pollQuestion)
    {
        $this->pollQuestion->removeElement($pollQuestion);
    }

    /**
     * Get pollQuestion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPollQuestion()
    {
        return $this->pollQuestion;
    }

    /**
     * Get created
     *
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}
