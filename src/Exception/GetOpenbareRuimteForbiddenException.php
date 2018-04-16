<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetOpenbareRuimteForbiddenException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetOpenbareRuimteForbiddenException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Forbidden. Je hebt waarschijnlijk geen geldige `X-Api-Key` header meegestuurd.', 403);
    }
}