<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class PostStandplaatsenBadRequestException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class PostStandplaatsenBadRequestException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Bad request. Je request body is geen geldige JSON of de query wordt niet ondersteund door de BAG API.', 400);
    }
}