<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetVerblijfsobjectenByIdNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetVerblijfsobjectenByIdNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}