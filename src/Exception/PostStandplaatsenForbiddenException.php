<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class PostStandplaatsenForbiddenException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class PostStandplaatsenForbiddenException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Forbidden. Je hebt waarschijnlijk geen geldige `X-Api-Key` header meegestuurd.', 403);
    }
}