<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Point of Interest
 *
 * @ApiResource
 * @ORM\Entity
 */
class Poi
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Title of the POI
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $title = '';


    /**
     * @var string Description of the POI
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $description = '';

    /**
     * @var string Address of the POI
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $address = '';

    /**
     * @var string Postal Code of the POI
     *
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    private $postal_code = '';

    /**
     * @var string City of the POI
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $city = '';

    /**
     * @var decimal Latitude of the POI
     *
     * @ORM\Column(type="decimal", precision=18, scale=12, nullable=true)
     */
    private $latitude;

    /**
     * @var decimal Longitude of the POI
     *
     * @ORM\Column(type="decimal", precision=18, scale=12, nullable=true)
     */
    private $longitude;

    /**
     * @var datetime Creation date of the poi
     *
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     * @Assert\DateTime()
     */
    private $created_date;

    /**
     * @var datetime Update date of the poi
     *
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     * @Assert\DateTime()
     */
    private $updated_date;


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
     *
     * @return Poi
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
     * Set description
     *
     * @param string $description
     *
     * @return Poi
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Poi
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     *
     * @return Poi
     */
    public function setPostalCode($postalCode)
    {
        $this->postal_code = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return integer
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Poi
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
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Poi
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Poi
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Poi
     */
    public function setCreatedDate($createdDate)
    {
        $this->created_date = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     *
     * @return Poi
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updated_date = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updated_date;
    }
}
