<?php
namespace Alfadoc\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="houses")
 */
class House
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
    protected $house;

    /**
     * @ORM\ManyToOne(targetEntity="Street", inversedBy="assignedHouses")
     */
    protected $street;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="house")
     **/
    protected $assignedUsers;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assignedUsers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set house
     *
     * @param string $house
     * @return House
     */
    public function setHouse($house)
    {
        $this->house = $house;

        return $this;
    }

    /**
     * Get house
     *
     * @return string 
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Set street
     *
     * @param \Alfadoc\CoreBundle\Entity\Street $street
     * @return House
     */
    public function setStreet(\Alfadoc\CoreBundle\Entity\Street $street = null)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return \Alfadoc\CoreBundle\Entity\Street 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Add assignedUsers
     *
     * @param \Alfadoc\CoreBundle\Entity\User $assignedUsers
     * @return House
     */
    public function addAssignedUser(\Alfadoc\CoreBundle\Entity\User $assignedUsers)
    {
        $this->assignedUsers[] = $assignedUsers;

        return $this;
    }

    /**
     * Remove assignedUsers
     *
     * @param \Alfadoc\CoreBundle\Entity\User $assignedUsers
     */
    public function removeAssignedUser(\Alfadoc\CoreBundle\Entity\User $assignedUsers)
    {
        $this->assignedUsers->removeElement($assignedUsers);
    }

    /**
     * Get assignedUsers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssignedUsers()
    {
        return $this->assignedUsers;
    }
}
