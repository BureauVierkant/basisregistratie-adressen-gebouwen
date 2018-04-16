<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetPandenByIdVoorkomenNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetPandenByIdVoorkomenNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}