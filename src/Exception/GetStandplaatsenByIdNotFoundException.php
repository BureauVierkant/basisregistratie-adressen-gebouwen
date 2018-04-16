<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetStandplaatsenByIdNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetStandplaatsenByIdNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}