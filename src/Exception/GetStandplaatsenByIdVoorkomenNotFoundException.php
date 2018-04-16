<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetStandplaatsenByIdVoorkomenNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetStandplaatsenByIdVoorkomenNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}