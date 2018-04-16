<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetOpenbareRuimtesByIdVoorkomenNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetOpenbareRuimtesByIdVoorkomenNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}