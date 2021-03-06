<?php
namespace Alfadoc\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="states")
 */
class State
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
    protected $state;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="assignedStates")
     */
    protected $country;

    /**
     * @ORM\OneToMany(targetEntity="City", mappedBy="state")
     **/
    protected $assignedCities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assignedCities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set state
     *
     * @param string $state
     * @return State
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param \Alfadoc\CoreBundle\Entity\Country $country
     * @return State
     */
    public function setCountry(\Alfadoc\CoreBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Alfadoc\CoreBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add assignedCities
     *
     * @param \Alfadoc\CoreBundle\Entity\City $assignedCities
     * @return State
     */
    public function addAssignedCity(\Alfadoc\CoreBundle\Entity\City $assignedCities)
    {
        $this->assignedCities[] = $assignedCities;

        return $this;
    }

    /**
     * Remove assignedCities
     *
     * @param \Alfadoc\CoreBundle\Entity\City $assignedCities
     */
    public function removeAssignedCity(\Alfadoc\CoreBundle\Entity\City $assignedCities)
    {
        $this->assignedCities->removeElement($assignedCities);
    }

    /**
     * Get assignedCities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignedCities()
    {
        return $this->assignedCities;
    }
}
