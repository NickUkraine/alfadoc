<?php
namespace Alfadoc\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="countries")
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $country;

    /**
     * @ORM\OneToMany(targetEntity="State", mappedBy="country")
     **/
    protected $assignedStates;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assignedStates = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set country
     *
     * @param string $country
     * @return Country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add assignedStates
     *
     * @param \Alfadoc\CoreBundle\Entity\State $assignedStates
     * @return Country
     */
    public function addAssignedState(\Alfadoc\CoreBundle\Entity\State $assignedStates)
    {
        $this->assignedStates[] = $assignedStates;

        return $this;
    }

    /**
     * Remove assignedStates
     *
     * @param \Alfadoc\CoreBundle\Entity\State $assignedStates
     */
    public function removeAssignedState(\Alfadoc\CoreBundle\Entity\State $assignedStates)
    {
        $this->assignedStates->removeElement($assignedStates);
    }

    /**
     * Get assignedStates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignedStates()
    {
        return $this->assignedStates;
    }
}
