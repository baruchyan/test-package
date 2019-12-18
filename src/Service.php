<?php

namespace Baruchyan\TestPackage;

/**
 * Class Service
 * @package Baruchyan\TestPackage
 */
class Service
{
    private $response;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param mixed $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }


}