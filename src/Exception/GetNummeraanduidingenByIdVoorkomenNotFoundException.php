<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetNummeraanduidingenByIdVoorkomenNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetNummeraanduidingenByIdVoorkomenNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}