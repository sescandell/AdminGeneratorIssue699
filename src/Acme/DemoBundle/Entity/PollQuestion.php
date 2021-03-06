<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PollQuestion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\PollQuestionRepository")
 */
class PollQuestion
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
     * @ORM\ManyToOne(targetEntity="Acme\DemoBundle\Entity\Poll", inversedBy="pollQuestion")
     * @ORM\JoinColumn(name="poll_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     * */
    private $poll;


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
     * @return PollQuestion
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
     * Set poll
     *
     * @param \Acme\DemoBundle\Entity\Poll $poll
     * @return PollQuestion
     */
    public function setPoll(\Acme\DemoBundle\Entity\Poll $poll = null)
    {
        $this->poll = $poll;

        return $this;
    }

    /**
     * Get poll
     *
     * @return \Acme\DemoBundle\Entity\Poll 
     */
    public function getPoll()
    {
        return $this->poll;
    }
}
