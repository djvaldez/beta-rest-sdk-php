<?php
/**
 * BillTo
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
 * BillTo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     CyberSource
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BillTo implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'title' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'suffix' => 'string',
        'building_number' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'city' => 'string',
        'county' => 'string',
        'district' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'company' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'ip_address' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'title' => 'title',
        'first_name' => 'firstName',
        'middle_name' => 'middleName',
        'last_name' => 'lastName',
        'suffix' => 'suffix',
        'building_number' => 'buildingNumber',
        'street1' => 'street1',
        'street2' => 'street2',
        'city' => 'city',
        'county' => 'county',
        'district' => 'district',
        'state' => 'state',
        'postal_code' => 'postalCode',
        'country' => 'country',
        'company' => 'company',
        'phone_number' => 'phoneNumber',
        'email' => 'email',
        'ip_address' => 'ipAddress'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'title' => 'setTitle',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'suffix' => 'setSuffix',
        'building_number' => 'setBuildingNumber',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'city' => 'setCity',
        'county' => 'setCounty',
        'district' => 'setDistrict',
        'state' => 'setState',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'company' => 'setCompany',
        'phone_number' => 'setPhoneNumber',
        'email' => 'setEmail',
        'ip_address' => 'setIpAddress'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'title' => 'getTitle',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'suffix' => 'getSuffix',
        'building_number' => 'getBuildingNumber',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'city' => 'getCity',
        'county' => 'getCounty',
        'district' => 'getDistrict',
        'state' => 'getState',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'company' => 'getCompany',
        'phone_number' => 'getPhoneNumber',
        'email' => 'getEmail',
        'ip_address' => 'getIpAddress'
    );
  
    
    /**
      * $title 
      * @var string
      */
    protected $title;
    
    /**
      * $first_name First name
      * @var string
      */
    protected $first_name;
    
    /**
      * $middle_name Middle name
      * @var string
      */
    protected $middle_name;
    
    /**
      * $last_name Last name
      * @var string
      */
    protected $last_name;
    
    /**
      * $suffix 
      * @var string
      */
    protected $suffix;
    
    /**
      * $building_number Building number in street address
      * @var string
      */
    protected $building_number;
    
    /**
      * $street1 Street address
      * @var string
      */
    protected $street1;
    
    /**
      * $street2 Street address 2
      * @var string
      */
    protected $street2;
    
    /**
      * $city City
      * @var string
      */
    protected $city;
    
    /**
      * $county County
      * @var string
      */
    protected $county;
    
    /**
      * $district District
      * @var string
      */
    protected $district;
    
    /**
      * $state State
      * @var string
      */
    protected $state;
    
    /**
      * $postal_code Postal code
      * @var string
      */
    protected $postal_code;
    
    /**
      * $country Country
      * @var string
      */
    protected $country;
    
    /**
      * $company Company
      * @var string
      */
    protected $company;
    
    /**
      * $phone_number Phone Number
      * @var string
      */
    protected $phone_number;
    
    /**
      * $email Email address
      * @var string
      */
    protected $email;
    
    /**
      * $ip_address IP address of the customer
      * @var string
      */
    protected $ip_address;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->title = $data["title"];
            $this->first_name = $data["first_name"];
            $this->middle_name = $data["middle_name"];
            $this->last_name = $data["last_name"];
            $this->suffix = $data["suffix"];
            $this->building_number = $data["building_number"];
            $this->street1 = $data["street1"];
            $this->street2 = $data["street2"];
            $this->city = $data["city"];
            $this->county = $data["county"];
            $this->district = $data["district"];
            $this->state = $data["state"];
            $this->postal_code = $data["postal_code"];
            $this->country = $data["country"];
            $this->company = $data["company"];
            $this->phone_number = $data["phone_number"];
            $this->email = $data["email"];
            $this->ip_address = $data["ip_address"];
        }
    }
    
    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
  
    /**
     * Sets title
     * @param string $title 
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;
        return $this;
    }
    
    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }
  
    /**
     * Sets first_name
     * @param string $first_name First name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        
        $this->first_name = $first_name;
        return $this;
    }
    
    /**
     * Gets middle_name
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middle_name;
    }
  
    /**
     * Sets middle_name
     * @param string $middle_name Middle name
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        
        $this->middle_name = $middle_name;
        return $this;
    }
    
    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }
  
    /**
     * Sets last_name
     * @param string $last_name Last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        
        $this->last_name = $last_name;
        return $this;
    }
    
    /**
     * Gets suffix
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }
  
    /**
     * Sets suffix
     * @param string $suffix 
     * @return $this
     */
    public function setSuffix($suffix)
    {
        
        $this->suffix = $suffix;
        return $this;
    }
    
    /**
     * Gets building_number
     * @return string
     */
    public function getBuildingNumber()
    {
        return $this->building_number;
    }
  
    /**
     * Sets building_number
     * @param string $building_number Building number in street address
     * @return $this
     */
    public function setBuildingNumber($building_number)
    {
        
        $this->building_number = $building_number;
        return $this;
    }
    
    /**
     * Gets street1
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }
  
    /**
     * Sets street1
     * @param string $street1 Street address
     * @return $this
     */
    public function setStreet1($street1)
    {
        
        $this->street1 = $street1;
        return $this;
    }
    
    /**
     * Gets street2
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }
  
    /**
     * Sets street2
     * @param string $street2 Street address 2
     * @return $this
     */
    public function setStreet2($street2)
    {
        
        $this->street2 = $street2;
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
     * @param string $city City
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets county
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }
  
    /**
     * Sets county
     * @param string $county County
     * @return $this
     */
    public function setCounty($county)
    {
        
        $this->county = $county;
        return $this;
    }
    
    /**
     * Gets district
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }
  
    /**
     * Sets district
     * @param string $district District
     * @return $this
     */
    public function setDistrict($district)
    {
        
        $this->district = $district;
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
     * @param string $state State
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
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
     * @param string $postal_code Postal code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        
        $this->postal_code = $postal_code;
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
     * @param string $country Country
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
    }
    
    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }
  
    /**
     * Sets company
     * @param string $company Company
     * @return $this
     */
    public function setCompany($company)
    {
        
        $this->company = $company;
        return $this;
    }
    
    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
  
    /**
     * Sets phone_number
     * @param string $phone_number Phone Number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        
        $this->phone_number = $phone_number;
        return $this;
    }
    
    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
  
    /**
     * Sets email
     * @param string $email Email address
     * @return $this
     */
    public function setEmail($email)
    {
        
        $this->email = $email;
        return $this;
    }
    
    /**
     * Gets ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }
  
    /**
     * Sets ip_address
     * @param string $ip_address IP address of the customer
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        
        $this->ip_address = $ip_address;
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
