<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetWoonplaatsenByIdNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetWoonplaatsenByIdNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}