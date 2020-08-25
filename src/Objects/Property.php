<?php


namespace LzoMedia\TravelMint\Objects;

use LzoMedia\TravelMint\TravelMintClient;

/**
 * Class Property
 * @package LzoMedia\TravelMint\Objects
 */
class Property
{

    protected $object;


    /**
     * Property constructor.
     * @param \stdClass $object
     */
    public function __construct(\stdClass $object)
    {
        $this->object = $object->items[0];
    }


    public function debug()
    {

        return print_r($this->object);
    }

    /**
     * @method getTitle()
     * @return mixed
     */
    public function getTitle()
    {
        return $this->object->properties['name'][0];
    }

    /**
     * @method getDescription()
     * @return mixed
     */
    public function getDescription()
    {
        return $this->object->properties['description'][0];
    }


    /**
     * @return mixed
     */
    public function getImage()
    {
        return ($this->object->properties['image'][0]->properties['url'][0]);
    }


    /**
     * @return mixed
     */
    public function getPhone()
    {
        //telephone
        return ($this->object->properties['telephone'][0]);
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return ($this->object->properties['priceRange'][0]);
    }

    /**
     * @return mixed
     */
    public function getLatitude(){
        return ($this->object->properties['geo'][0])->properties['latitude'][0];
    }

    /**
     * @return mixed
     */
    public function getLongitude(){
        return ($this->object->properties['geo'][0])->properties['longitude'][0];
    }

    /**
     * @return mixed
     */
    public function getCountry(){
        return ($this->object->properties['address'][0])->properties['addressCountry'][0];
    }

    /**
     * @return mixed
     */
    public function getCity(){
        return ($this->object->properties['address'][0])->properties['addressLocality'][0];
    }

    /**
     * @return mixed
     */
    public function getRegion(){
        return ($this->object->properties['address'][0])->properties['addressRegion'][0];
    }

    /**
     * @return mixed
     */
    public function getStreet(){
        return ($this->object->properties['address'][0])->properties['streetAddress'][0];
    }

    /**
     * @return mixed
     */
    public function getHours(){
        return ($this->object->properties['openingHours'][0]);
    }

    /**
     * @return mixed
     */
    public function getPayments(){
        return ($this->object->properties['paymentAccepted'][0]);
    }


}
