<?php
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 04/03/2015
 */

namespace APIv3SandboxLib\Controllers;

use APIv3SandboxLib\APIException;
use APIv3SandboxLib\APIHelper;
use APIv3SandboxLib\Configuration;
use Unirest\Request;
use Illuminate\Support\Facades\Config;

class OrderingController {
    /**
     * Displays the current balance of your account and auto-refill options
     * @return mixed response from the API call*/
    public function getAccountBalance () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/accountbalance';

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
     * Create a new cart
     * @param  CartCreateModel     $body     Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function updateCart (
                $body) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cart';

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
     * Add a product to an existing cart
     * @param  int               $cartIdentifier     Required parameter: The identifier of the cart
     * @param  CartItemModel     $body               Required parameter: TODO: type description here
     * @return mixed response from the API call*/
    public function createCartProduct (
                $cartIdentifier,
                $body) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cart/{cartIdentifier}/product';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'cartIdentifier' => $cartIdentifier,
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
     * List available carts
     * @param  int             $pageNumber     Required parameter: The page number, starting at 0
     * @param  int             $pageSize       Required parameter: The page size (max number of entities that are displayed in the response)
     * @param  string|null     $reference      Optional parameter: The custom reference associated to the cart
     * @return mixed response from the API call*/
    public function getCarts (
                $pageNumber,
                $pageSize,
                $reference = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cart';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'pageNumber' => $pageNumber,
            'pageSize'   => $pageSize,
            'reference'  => $reference,
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
     * Remove part or all of a product in a given cart
     * @param  int               $cartIdentifier     Required parameter: The identifier of the cart
     * @param  int               $orderProductId     Required parameter: The identifier of the product to update
     * @param  QuantityModel     $quantity           Required parameter: The quantity of product to remove from the cart
     * @return mixed response from the API call*/
    public function createCartProductRemove (
                $cartIdentifier,
                $orderProductId,
                $quantity) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cart/{cartIdentifier}/product/{orderProductId}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'cartIdentifier' => $cartIdentifier,
            'orderProductId' => $orderProductId,
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
        $response = Request::post($queryUrl, $headers, json_encode($quantity));

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Delete a cart and its content
     * @param  int        $cartIdentifier     Required parameter: The identifier of the cart to delete
     * @return mixed response from the API call*/
    public function deleteCart (
                $cartIdentifier) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cart/{cartIdentifier}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'cartIdentifier' => $cartIdentifier,
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
     * Check out a cart
     * @param  int     $cartIdentifier     Required parameter: The identifier of the cart to checkout
     * @return mixed response from the API call*/
    public function getCartCheckout (
                $cartIdentifier) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cart/{cartIdentifier}/checkout';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'cartIdentifier' => $cartIdentifier,
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
     * List or search your orders
     * @param  int             $pageNumber            Required parameter: The page number, starting at 0
     * @param  int             $pageSize              Required parameter: The page size (max number of entities that are displayed in the response)
     * @param  string|null     $reference             Optional parameter: The reference assigned to the order by voxbone
     * @param  string|null     $customerReference     Optional parameter: The custom reference assigned to the cart that created the order
     * @param  string|null     $status                Optional parameter: The current order status
     * @param  string|null     $dateFrom              Optional parameter: The earliest date at which the order was created ('yyyy-MM-dd HH:mm:ss' format)
     * @param  string|null     $dateTo                Optional parameter: The latest date at which the order was created ('yyyy-MM-dd HH:mm:ss' format)
     * @return mixed response from the API call*/
    public function getOrders (
                $pageNumber,
                $pageSize,
                $reference = NULL,
                $customerReference = NULL,
                $status = NULL,
                $dateFrom = NULL,
                $dateTo = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/order';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'pageNumber'        => $pageNumber,
            'pageSize'          => $pageSize,
            'reference'         => $reference,
            'customerReference' => $customerReference,
            'status'            => $status,
            'dateFrom'          => $dateFrom,
            'dateTo'            => $dateTo,
        ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'      => 'APIMATIC 2.0',
            'Accept'          => 'application/json'
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
     * Cancel DIDs and remove them from your account
     * @param  DidIdListModel     $didIds     Required parameter: The list of identifier for the DIDs to cancel
     * @return mixed response from the API call*/
    public function createCancel (
                $didIds) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cancel';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-type'  => 'application/json; charset=utf-8'
        );

        //prepare API request
        $response = Request::post($queryUrl, $headers, json_encode($didIds));

        //and invoke the API call request to fetch the response
        //$response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            return $response;
        }

        return $response->body;
    }
        
    /**
     * Show information on a specific cart
     * @param  int     $cartIdentifier     Required parameter: The identifier of the cart
     * @return mixed response from the API call*/
    public function getCartDetails (
                $cartIdentifier) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cart/{cartIdentifier}/';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'cartIdentifier' => $cartIdentifier,
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
     * Displays detailed information on a specific cart
     * @param  int     $cartIdentifier     Required parameter: The identifier of the cart
     * @return mixed response from the API call*/
    public function getCart (
                $cartIdentifier) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        $queryBuilder = Config::get('voxbone.base_uri');
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/ordering/cart/{cartIdentifier}	';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'cartIdentifier' => $cartIdentifier,
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
        
}
