<?php
/**
 * RefundRequest
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
 * RefundRequest Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     CyberSource
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RefundRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'amount' => 'string',
        'currency' => 'string',
        'reference_id' => 'string',
        'vc_order_id' => 'string',
        'merchant_defined_data' => '\CyberSource\Model\MerchantDefinedData',
        'payment_solution' => 'string',
        'items' => '\CyberSource\Model\Offer[]',
        'merchant_descriptor' => '\CyberSource\Model\MerchantDescriptor'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'amount' => 'amount',
        'currency' => 'currency',
        'reference_id' => 'referenceId',
        'vc_order_id' => 'vcOrderId',
        'merchant_defined_data' => 'merchantDefinedData',
        'payment_solution' => 'paymentSolution',
        'items' => 'items',
        'merchant_descriptor' => 'merchantDescriptor'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'reference_id' => 'setReferenceId',
        'vc_order_id' => 'setVcOrderId',
        'merchant_defined_data' => 'setMerchantDefinedData',
        'payment_solution' => 'setPaymentSolution',
        'items' => 'setItems',
        'merchant_descriptor' => 'setMerchantDescriptor'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'reference_id' => 'getReferenceId',
        'vc_order_id' => 'getVcOrderId',
        'merchant_defined_data' => 'getMerchantDefinedData',
        'payment_solution' => 'getPaymentSolution',
        'items' => 'getItems',
        'merchant_descriptor' => 'getMerchantDescriptor'
    );
  
    
    /**
      * $amount The amount to refund
      * @var string
      */
    protected $amount;
    
    /**
      * $currency The currency of the refund amount
      * @var string
      */
    protected $currency;
    
    /**
      * $reference_id Merchant reference ID for the transaction
      * @var string
      */
    protected $reference_id;
    
    /**
      * $vc_order_id Identifier for the Visa Checkout order. Obtain this value from the callIDfield from Visa Checkout
      * @var string
      */
    protected $vc_order_id;
    
    /**
      * $merchant_defined_data 
      * @var \CyberSource\Model\MerchantDefinedData
      */
    protected $merchant_defined_data;
    
    /**
      * $payment_solution Type of payment solution that is being used for the transaction
      * @var string
      */
    protected $payment_solution;
    
    /**
      * $items 
      * @var \CyberSource\Model\Offer[]
      */
    protected $items;
    
    /**
      * $merchant_descriptor 
      * @var \CyberSource\Model\MerchantDescriptor
      */
    protected $merchant_descriptor;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->amount = $data["amount"];
            $this->currency = $data["currency"];
            $this->reference_id = $data["reference_id"];
            $this->vc_order_id = $data["vc_order_id"];
            $this->merchant_defined_data = $data["merchant_defined_data"];
            $this->payment_solution = $data["payment_solution"];
            $this->items = $data["items"];
            $this->merchant_descriptor = $data["merchant_descriptor"];
        }
    }
    
    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
  
    /**
     * Sets amount
     * @param string $amount The amount to refund
     * @return $this
     */
    public function setAmount($amount)
    {
        
        $this->amount = $amount;
        return $this;
    }
    
    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
  
    /**
     * Sets currency
     * @param string $currency The currency of the refund amount
     * @return $this
     */
    public function setCurrency($currency)
    {
        
        $this->currency = $currency;
        return $this;
    }
    
    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }
  
    /**
     * Sets reference_id
     * @param string $reference_id Merchant reference ID for the transaction
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        
        $this->reference_id = $reference_id;
        return $this;
    }
    
    /**
     * Gets vc_order_id
     * @return string
     */
    public function getVcOrderId()
    {
        return $this->vc_order_id;
    }
  
    /**
     * Sets vc_order_id
     * @param string $vc_order_id Identifier for the Visa Checkout order. Obtain this value from the callIDfield from Visa Checkout
     * @return $this
     */
    public function setVcOrderId($vc_order_id)
    {
        
        $this->vc_order_id = $vc_order_id;
        return $this;
    }
    
    /**
     * Gets merchant_defined_data
     * @return \CyberSource\Model\MerchantDefinedData
     */
    public function getMerchantDefinedData()
    {
        return $this->merchant_defined_data;
    }
  
    /**
     * Sets merchant_defined_data
     * @param \CyberSource\Model\MerchantDefinedData $merchant_defined_data 
     * @return $this
     */
    public function setMerchantDefinedData($merchant_defined_data)
    {
        
        $this->merchant_defined_data = $merchant_defined_data;
        return $this;
    }
    
    /**
     * Gets payment_solution
     * @return string
     */
    public function getPaymentSolution()
    {
        return $this->payment_solution;
    }
  
    /**
     * Sets payment_solution
     * @param string $payment_solution Type of payment solution that is being used for the transaction
     * @return $this
     */
    public function setPaymentSolution($payment_solution)
    {
        
        $this->payment_solution = $payment_solution;
        return $this;
    }
    
    /**
     * Gets items
     * @return \CyberSource\Model\Offer[]
     */
    public function getItems()
    {
        return $this->items;
    }
  
    /**
     * Sets items
     * @param \CyberSource\Model\Offer[] $items 
     * @return $this
     */
    public function setItems($items)
    {
        
        $this->items = $items;
        return $this;
    }
    
    /**
     * Gets merchant_descriptor
     * @return \CyberSource\Model\MerchantDescriptor
     */
    public function getMerchantDescriptor()
    {
        return $this->merchant_descriptor;
    }
  
    /**
     * Sets merchant_descriptor
     * @param \CyberSource\Model\MerchantDescriptor $merchant_descriptor 
     * @return $this
     */
    public function setMerchantDescriptor($merchant_descriptor)
    {
        
        $this->merchant_descriptor = $merchant_descriptor;
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
