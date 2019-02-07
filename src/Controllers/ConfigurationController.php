<?php
/*
 * Mannysoft
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 04/03/2015
 */

namespace Mannysoft\Controllers;

use Mannysoft\APIException;
use Mannysoft\APIHelper;
use Mannysoft\Configuration;

use Unirest\Request;
use Illuminate\Support\Facades\Config;

class ConfigurationController {
    /**
     * Apply a given configuration to one or more numbers
     * @param  DidConfigurationModel     $body     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function createConfiguration (
                $body) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/configuration';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($body));
        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * List available capacity groups
     * @param  int             $pageNumber      Required parameter: The page number, starting at 0.
     * @param  int             $pageSize        Required parameter: The page size (max number of entities that are displayed in the response).
     * @param  string|null     $description     Optional parameter: A human readable description of the capacity group
     * @param  string|null     $e164            Optional parameter: The E164 of a number mapped to the capacity group
     * @return mixed response from the API call*/
    public function getCapacityGroups (
                $pageNumber,
                $pageSize,
                $description = NULL,
                $e164 = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/capacitygroup';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'pageNumber'  => $pageNumber,
            'pageSize'    => $pageSize,
            'description' => $description,
            'e164'        => $e164,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Save or update a capacity group
     * @param  ACapacityGroupSaveModel     $body     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function updateCapacityGroup (
                $body) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/capacitygroup';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::put($queryUrl, $headers, json_encode($body));

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Delete a capacity group
     * @param  int        $capacityGroupId     Required parameter: The identifier of the capacity group to delete
     * @return mixed response from the API call*/
    public function deleteCapacityGroup (
                $capacityGroupId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/capacitygroup/{capacityGroupId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'capacityGroupId' => $capacityGroupId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'    => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::delete($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * List available fax URIs
     * @param  int             $pageNumber         Required parameter: The page number, starting at 0
     * @param  int             $pageSize           Required parameter: The page size (max number of entities that are displayed in the response)
     * @param  string|null     $deliveryMethod     Optional parameter: The delivery method used by the fax URI
     * @param  string|null     $faxFileFormat      Optional parameter: The file format used by the fax URI
     * @param  string|null     $uri                Optional parameter: The formatted URI
     * @param  string|null     $csid               Optional parameter: The csid used by the fax URI
     * @return mixed response from the API call*/
    public function getFaxUris (
                $pageNumber,
                $pageSize,
                $deliveryMethod = NULL,
                $faxFileFormat = NULL,
                $uri = NULL,
                $csid = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/faxuri';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'pageNumber'     => $pageNumber,
            'pageSize'       => $pageSize,
            'deliveryMethod' => $deliveryMethod,
            'faxFileFormat'  => $faxFileFormat,
            'uri'            => $uri,
            'csid'           => $csid,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Save or update a fax URI
     * @param  FaxUriSaveModel     $body     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function updateFaxUri (
                $body) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/faxuri';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::put($queryUrl, $headers, json_encode($body));

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Delete a fax uri
     * @param  int        $faxUriId         Required parameter: The identifier of the fax uri to delete
     * @return mixed response from the API call*/
    public function deleteFaxUri (
                $faxUriId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/faxuri/{faxUriId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'faxUriId'     => $faxUriId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'    => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::delete($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * List available voice URIs
     * @param  int             $pageNumber           Required parameter: The page number, starting at 0.
     * @param  int             $pageSize             Required parameter: The page size (max number of entities that are displayed in the response).
     * @param  int|null        $backupUriId          Optional parameter: The identifier of the backup voice URI
     * @param  string|null     $voiceUriProtocol     Optional parameter: The protocol of the voice URI
     * @param  string|null     $uri                  Optional parameter: The URI where the call is delivered
     * @param  string|null     $description          Optional parameter: A human readable description of the URI
     * @return mixed response from the API call*/
    public function getVoiceUris (
                $pageNumber,
                $pageSize,
                $backupUriId = NULL,
                $voiceUriProtocol = NULL,
                $uri = NULL,
                $description = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/voiceuri';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'pageNumber'       => $pageNumber,
            'pageSize'         => $pageSize,
            'backupUriId'      => $backupUriId,
            'voiceUriProtocol' => $voiceUriProtocol,
            'uri'              => $uri,
            'description'      => $description,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'     => 'APIMATIC 2.0',
            'Accept'         => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Save or update a voice URI
     * @param  AVoiceUriSaveModel     $body     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function updateVoiceUri (
                $body) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/voiceuri';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::put($queryUrl, $headers, json_encode($body));

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Delete a voice uri
     * @param  int        $voiceUriId       Required parameter: The identifier of the voice uri to delete
     * @return mixed response from the API call*/
    public function deleteVoiceUri (
                $voiceUriId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/voiceuri/{voiceUriId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'voiceUriId'   => $voiceUriId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'    => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::delete($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * List available POPs, or deliveries, for call routing
     * @return mixed response from the API call*/
    public function getPop () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/pop';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * List available sms link groups
     * @return mixed response from the API call*/
    public function getSmsLinkGroups () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/smslinkgroup';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Create a new sms link group
     * @param  SmsLinkGroupSaveModel     $body     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function updateSmsLinkGroup (
                $body) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/smslinkgroup';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::put($queryUrl, $headers, json_encode($body));

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Delete an sms link group
     * @param  int        $smsLinkGroupId     Required parameter: The identifier of the sms link group to delete
     * @return mixed response from the API call*/
    public function deleteSmsLinkGroup (
                $smsLinkGroupId
                ) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/smslinkgroup/{smsLinkGroupId} ';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'smsLinkGroupId' => $smsLinkGroupId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::delete($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * List available sms links
     * @param  int|null        $groupId       Optional parameter: The identifier of the sms link's group
     * @param  string|null     $type          Optional parameter: The protocol of the sms link
     * @param  string|null     $direction     Optional parameter: the direction of the sms link
     * @param  string|null     $smsLinkId     Optional parameter: The identifier of the sms link
     * @return mixed response from the API call*/
    public function getSmsLinks (
                $groupId = NULL,
                $type = NULL,
                $direction = NULL,
                $smsLinkId = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/smslink';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'groupId'   => $groupId,
            'type'      => $type,
            'direction' => $direction,
            'smsLinkId' => $smsLinkId,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Save or update an sms link
     * @param  SmsLinkSaveModel     $body     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function updateSmsLink (
                $body) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/smslink';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::put($queryUrl, $headers, json_encode($body));

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Delete an sms link
     * @param  int        $smsLinkId        Required parameter: The identifier of the sms link to delete
     * @return mixed response from the API call*/
    public function deleteSmsLink (
                $smsLinkId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/smslink/{smsLinkId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'smsLinkId'    => $smsLinkId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'    => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::delete($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Displays detailed information on a specific voice URI
     * @param  int     $voiceUriId     Required parameter: The identifier of the voice URI
     * @return mixed response from the API call*/
    public function getVoiceUri (
                $voiceUriId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/voiceuri/{voiceUriId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'voiceUriId' => $voiceUriId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Displays detailed information on a specific capacity group
     * @param  int     $capacityGroupId     Required parameter: The identifier of the capacity group
     * @return mixed response from the API call*/
    public function getCapacityGroup (
                $capacityGroupId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/capacitygroup/{capacityGroupId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'capacityGroupId' => $capacityGroupId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Displays detailed information on a specific fax URI
     * @param  int     $faxUriId     Required parameter: The identifier of the fax URI
     * @return mixed response from the API call*/
    public function getFaxUri (
                $faxUriId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/faxuri/{faxUriId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'faxUriId' => $faxUriId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Displays detailed information on a specific sms link
     * @param  int     $smsLinkId     Required parameter: The identifier of the sms link
     * @return mixed response from the API call*/
    public function getSmsLink (
                $smsLinkId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/smslink/{smsLinkId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'smsLinkId' => $smsLinkId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::get($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * create an sms link
     * @param  int     $smsLinkId     Required parameter: The identifier of the sms link
     * @return mixed response from the API call*/
    public function newSmsLink (
                $smsLinkId) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/configuration/smslink/{smsLinkId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'smsLinkId' => $smsLinkId,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $response = Request::put($queryUrl, $headers);

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
}
