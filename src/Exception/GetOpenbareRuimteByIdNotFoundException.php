<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetOpenbareRuimteByIdNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetOpenbareRuimteByIdNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}