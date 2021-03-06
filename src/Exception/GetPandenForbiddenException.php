<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetPandenForbiddenException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetPandenForbiddenException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Forbidden. Je hebt waarschijnlijk geen geldige `X-Api-Key` header meegestuurd.', 403);
    }
}