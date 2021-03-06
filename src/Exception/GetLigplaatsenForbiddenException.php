<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetLigplaatsenForbiddenException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetLigplaatsenForbiddenException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Forbidden. Je hebt waarschijnlijk geen geldige `X-Api-Key` header meegestuurd.', 403);
    }
}