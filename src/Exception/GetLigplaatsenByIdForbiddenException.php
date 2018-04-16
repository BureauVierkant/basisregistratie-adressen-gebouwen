<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetLigplaatsenByIdForbiddenException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetLigplaatsenByIdForbiddenException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Forbidden. Je hebt waarschijnlijk geen geldige `X-Api-Key` header meegestuurd.', 403);
    }
}