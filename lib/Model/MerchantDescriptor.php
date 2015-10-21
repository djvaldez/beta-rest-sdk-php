<?php
/**
 * MerchantDescriptor
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;
/**
 * MerchantDescriptor Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     CyberSource
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchantDescriptor implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'primary' => 'string',
        'alternate' => 'string',
        'city' => 'string',
        'contact' => 'string',
        'country' => 'string',
        'postal_code' => 'string',
        'state' => 'string',
        'street' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'primary' => 'primary',
        'alternate' => 'alternate',
        'city' => 'city',
        'contact' => 'contact',
        'country' => 'country',
        'postal_code' => 'postalCode',
        'state' => 'state',
        'street' => 'street'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'primary' => 'setPrimary',
        'alternate' => 'setAlternate',
        'city' => 'setCity',
        'contact' => 'setContact',
        'country' => 'setCountry',
        'postal_code' => 'setPostalCode',
        'state' => 'setState',
        'street' => 'setStreet'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'primary' => 'getPrimary',
        'alternate' => 'getAlternate',
        'city' => 'getCity',
        'contact' => 'getContact',
        'country' => 'getCountry',
        'postal_code' => 'getPostalCode',
        'state' => 'getState',
        'street' => 'getStreet'
    );
  
    
    /**
      * $primary Merchant description that is displayed on the cardholders statement
      * @var string
      */
    protected $primary;
    
    /**
      * $alternate Alternate merchant contact information.
      * @var string
      */
    protected $alternate;
    
    /**
      * $city Merchant city that is displayed on the cardholders statement.
      * @var string
      */
    protected $city;
    
    /**
      * $contact Merchant contact information, such as a phone number  that is displayed on the cardholders statement.
      * @var string
      */
    protected $contact;
    
    /**
      * $country Merchant country that is displayed on the cardholders statement.
      * @var string
      */
    protected $country;
    
    /**
      * $postal_code Merchant postal code that is displayed on the cardholders statement
      * @var string
      */
    protected $postal_code;
    
    /**
      * $state Merchant state that is displayed on the cardholders statement.
      * @var string
      */
    protected $state;
    
    /**
      * $street Merchant street address that is displayed on the cardholders statement.
      * @var string
      */
    protected $street;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->primary = $data["primary"];
            $this->alternate = $data["alternate"];
            $this->city = $data["city"];
            $this->contact = $data["contact"];
            $this->country = $data["country"];
            $this->postal_code = $data["postal_code"];
            $this->state = $data["state"];
            $this->street = $data["street"];
        }
    }
    
    /**
     * Gets primary
     * @return string
     */
    public function getPrimary()
    {
        return $this->primary;
    }
  
    /**
     * Sets primary
     * @param string $primary Merchant description that is displayed on the cardholders statement
     * @return $this
     */
    public function setPrimary($primary)
    {
        
        $this->primary = $primary;
        return $this;
    }
    
    /**
     * Gets alternate
     * @return string
     */
    public function getAlternate()
    {
        return $this->alternate;
    }
  
    /**
     * Sets alternate
     * @param string $alternate Alternate merchant contact information.
     * @return $this
     */
    public function setAlternate($alternate)
    {
        
        $this->alternate = $alternate;
        return $this;
    }
    
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
  
    /**
     * Sets city
     * @param string $city Merchant city that is displayed on the cardholders statement.
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets contact
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }
  
    /**
     * Sets contact
     * @param string $contact Merchant contact information, such as a phone number  that is displayed on the cardholders statement.
     * @return $this
     */
    public function setContact($contact)
    {
        
        $this->contact = $contact;
        return $this;
    }
    
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country Merchant country that is displayed on the cardholders statement.
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
    }
    
    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }
  
    /**
     * Sets postal_code
     * @param string $postal_code Merchant postal code that is displayed on the cardholders statement
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        
        $this->postal_code = $postal_code;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state Merchant state that is displayed on the cardholders statement.
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }
  
    /**
     * Sets street
     * @param string $street Merchant street address that is displayed on the cardholders statement.
     * @return $this
     */
    public function setStreet($street)
    {
        
        $this->street = $street;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}