<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetPandenByIdNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetPandenByIdNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}