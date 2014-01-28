<?php
namespace Alfadoc\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cities")
 */
class City
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
    protected $city;

    /**
     * @ORM\ManyToOne(targetEntity="State", inversedBy="assignedCities")
     */
    protected $state;


    /**
     * @ORM\OneToMany(targetEntity="Street", mappedBy="city")
     **/
    protected $assignedStreets;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assignedStreets = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set city
     *
     * @param string $city
     * @return City
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param \Alfadoc\CoreBundle\Entity\State $state
     * @return City
     */
    public function setState(\Alfadoc\CoreBundle\Entity\State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \Alfadoc\CoreBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Add assignedStreets
     *
     * @param \Alfadoc\CoreBundle\Entity\Street $assignedStreets
     * @return City
     */
    public function addAssignedStreet(\Alfadoc\CoreBundle\Entity\Street $assignedStreets)
    {
        $this->assignedStreets[] = $assignedStreets;

        return $this;
    }

    /**
     * Remove assignedStreets
     *
     * @param \Alfadoc\CoreBundle\Entity\Street $assignedStreets
     */
    public function removeAssignedStreet(\Alfadoc\CoreBundle\Entity\Street $assignedStreets)
    {
        $this->assignedStreets->removeElement($assignedStreets);
    }

    /**
     * Get assignedStreets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignedStreets()
    {
        return $this->assignedStreets;
    }
}
