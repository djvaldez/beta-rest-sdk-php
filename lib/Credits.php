<?php
/**
 * Credits
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

namespace CyberSource;

use \CyberSource\Configuration;
use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\ObjectSerializer;

/**
 * Credits Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Credits
{

    /**
     * API Client
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://sandbox.api.visa.com/cybersource/');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \CyberSource\ApiClient $apiClient set the API client
     * @return Credits
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getCredits
     *
     * Retrieve all Credits
     *
     * @param int $offset offset (optional)
     * @param int $limit limit (optional)
     * @return \CyberSource\Model\ListCreditResponse[]
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function getCredits($offset=null, $limit=null)
    {
        
  
        // parse inputs
        $resourcePath = "payments/v1/credits";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\ListCreditResponse[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\ListCreditResponse[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\ListCreditResponse[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * postCredit
     *
     * Post a Credit
     *
     * @param \CyberSource\Model\CreditRequest $credit_request credit request data (required)
     * @return \CyberSource\Model\CreditPostResponse
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function postCredit($credit_request)
    {
        
        // verify the required parameter 'credit_request' is set
        if ($credit_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $credit_request when calling postCredit');
        }
  
        // parse inputs
        $resourcePath = "payments/v1/credits";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        
        // body params
        $_tempBody = null;
        if (isset($credit_request)) {
            $_tempBody = $credit_request;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\CreditPostResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\CreditPostResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\CreditPostResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * findCredit
     *
     * Retrieve a Credit
     *
     * @param string $id Unique identifier for the transaction (required)
     * @return \CyberSource\Model\CreditGetResponse
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function findCredit($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling findCredit');
        }
  
        // parse inputs
        $resourcePath = "payments/v1/credits/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\CreditGetResponse'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\CreditGetResponse', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\CreditGetResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * doCreditVoid
     *
     * Void a credit
     *
     * @param string $id creditId (required)
     * @param \CyberSource\Model\VoidRequest $void_request Void request data (optional)
     * @return \CyberSource\Model\CreditResponseWithSelfLink
     * @throws \CyberSource\ApiException on non-2xx response
     */
    public function doCreditVoid($id, $void_request=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling doCreditVoid');
        }
  
        // parse inputs
        $resourcePath = "payments/v1/credits/{id}/voids";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        // body params
        $_tempBody = null;
        if (isset($void_request)) {
            $_tempBody = $void_request;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\CyberSource\Model\CreditResponseWithSelfLink'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\CreditResponseWithSelfLink', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\CreditResponseWithSelfLink', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
