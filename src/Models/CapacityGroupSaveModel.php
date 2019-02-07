<?php 
/*
 * Mannysoft
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 04/03/2015
 */

namespace Mannysoft\Models;

use JsonSerializable;

class CapacityGroupSaveModel implements JsonSerializable {
    /**
     * The maximum capacity for the capacity group
     * @param int $maximumCapacity public property
     */
    protected $maximumCapacity;

    /**
     * A human readable description of the capacity group
     * @param string $description public property
     */
    protected $description;

    /**
     * The identifier of the capacity group
     * @param int $capacityGroupId public property
     */
    protected $capacityGroupId;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   int               $maximumCapacity   Initialization value for the property $this->maximumCapacity
	 * @param   string            $description       Initialization value for the property $this->description    
	 * @param   int               $capacityGroupId   Initialization value for the property $this->capacityGroupId
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->maximumCapacity = func_get_arg(0);
            $this->description     = func_get_arg(1);
            $this->capacityGroupId = func_get_arg(2);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['maximumCapacity'] = $this->maximumCapacity;
        $json['description']     = $this->description;
        $json['capacityGroupId'] = $this->capacityGroupId;
        return $json;
    }
}