<?php 
/*
 * EngagementSummaryAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ) on 11/02/2016
 */

namespace EngagementSummaryAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class ProofOfConcept extends Engagement implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $name          Initialization value for the property $this->name       
     * @param   string            $description   Initialization value for the property $this->description
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->name        = func_get_arg(0);
            $this->description = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']        = $this->name;
        $json['description'] = $this->description;
        $json = array_merge($json, parent::jsonSerialize());

        return $json;
    }
}