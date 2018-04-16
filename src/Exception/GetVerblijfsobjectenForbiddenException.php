<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetVerblijfsobjectenForbiddenException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetVerblijfsobjectenForbiddenException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Forbidden. Je hebt waarschijnlijk geen geldige `X-Api-Key` header meegestuurd.', 403);
    }
}