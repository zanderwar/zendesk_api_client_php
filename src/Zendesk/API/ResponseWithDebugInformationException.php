<?php

namespace Zendesk\API;

/**
 * ResponseException extends the Exception class with simplified messaging
 * @package Zendesk\API
 */
class ResponseWithDebugInformationException extends \Exception
{

    /**
     * @param string $method
     * @param string $detail
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct($debugInformation)
    {
        $statusCode = $debugInformation->lastResponseCode;
        print($debugInformation);
        print("");
        parent::__construct("Your request failed!");
    }

}
